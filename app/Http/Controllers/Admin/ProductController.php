<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\Product;
use Illuminate\Support\Str;


use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::with(['category', 'subcategory', 'images', 'variants'])->get();
       
        return view('admin.product-list', compact('products'));
    }

    
    public function deleteImage($id, Request $request)
    {
        if($request->type=="product"){
            $image = ProductImage::findOrFail($id);
            if (file_exists(public_path($image->image))) {
                unlink(public_path($image->image));
            }
            $image->delete();
        }
        
       
        
        return response()->json(['message' => 'Image deleted successfully.']);
    }

    public function productlist_data()
{
    $products = Product::with(['category', 'subcategory', 'variants', 'images']);

    return DataTables::of($products)
        ->addColumn('image', function ($product) {
            $image = $product->images->first();
            if ($image) {
                return '<img src="' . asset($image->image) . '" width="50">';
            }
            return 'N/A';
        })
        ->addColumn('category', fn($p) => $p->category->name ?? 'N/A')
        ->addColumn('subcategory', fn($p) => $p->subcategory->name ?? 'N/A')
        ->addColumn('price', fn($p) => $p->variants->first()->price ?? 'N/A')
        ->addColumn('stock', fn($p) => $p->variants->sum('stock'))
        ->addColumn('status', fn($p) => $p->status ? 'ACTIVE' : 'INACTIVE')
        ->addColumn('date', fn($p) => $p->created_at->format('Y-m-d'))
        ->addColumn('action', function ($p) {
            $edit = route('admin.products.edit', $p->id);
            $detail = route('admin.products.detail', $p->id);

            return <<<HTML
                <a href="{$edit}" class="btn btn-sm btn-primary">Edit</a>
                <button class="btn btn-sm btn-danger delete-btn" data-id="{$p->id}">Delete</button>
                <a href="{$detail}" class="btn btn-sm btn-success">View Details</a>
            HTML;
        })
        
        ->rawColumns(['image', 'action'])
        ->make(true);
}


    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $flavours = DB::table('flavours')->get(); // [id => name]

        return view('admin.product-add', compact('categories', 'subcategories','flavours'));
    }

    public function getByCategory($categoryId)
    {
        $subcategories = SubCategory::where('category_id', $categoryId)->get(['id', 'name']);
        return response()->json($subcategories);
    }
    
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:sub_categories,id',
            'short_description' => 'nullable|string',
            'long_description' => 'nullable|string',
            'flavours' => 'nullable|array',
            'product_photo.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'variants' => 'required|array|min:1',
            'variants.*.size' => 'nullable|string',
            'variants.*.price' => 'required|numeric|min:0',
            'variants.*.stock' => 'required|integer|min:0',
            'variants.*.discount' => 'nullable|numeric|min:0|max:100',
        ]);
    
        DB::beginTransaction();
    
        try {
     
            $flavours = $request->flavours; 

            $productData = [
                'name' => $validated['name'],
                'slug' => Str::slug($validated['slug']),
                'category_id' => $validated['category_id'],
                'short_description' => $validated['short_description'] ?? null,
                'long_description' => $validated['long_description'] ?? null,
                'flavours' => is_array($flavours) ? implode(',', $flavours) : null,
            ];
               
            if (!empty($validated['subcategory_id'])) {
                $productData['subcategory_id'] = $validated['subcategory_id'];
            }

            
            // // Attach categories (required)
            // $product->categories()->attach($validated['category_ids']);

            // // Attach subcategories (optional)
            // if (!empty($validated['subcategory_ids'])) {
            //     $product->subcategories()->attach($validated['subcategory_ids']);
            // }    
            
            $product = Product::create($productData);

            
    

            // Save images
            if ($request->hasFile('product_photo')) {
                foreach ($request->file('product_photo') as $file) {
                    $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $destinationPath = public_path('assets/product_images');

                    // Create folder if it doesn't exist
                    if (!file_exists($destinationPath)) {
                        mkdir($destinationPath, 0755, true);
                    }

                    // Move the file
                    $file->move($destinationPath, $imageName);

                    // Save relative path in DB
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => 'assets/product_images/' . $imageName,
                    ]);
                }
            }

    
            // Save product variants
            foreach ($validated['variants'] as $variant) {
                ProductVariant::create([
                    'product_id' => $product->id,
                    'size' => $variant['size'],
                    'price' => $variant['price'],
                    'stock' => $variant['stock'],
                    'discount' => $variant['discount'] ?? 0,
                ]);
            }
    
            DB::commit();
    
            return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
    
            return back()->with('error', 'Failed to save product: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
       
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $product = Product::with(['images', 'variants'])->findOrFail($id);
        $flavours = DB::table('flavours')->get();
        return view('admin.product-edit', compact('product', 'categories', 'subcategories','flavours'));
    }

    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
        'category_id' => 'required|exists:categories,id',
        'subcategory_id' => 'nullable|exists:sub_categories,id',
        'short_description' => 'nullable|string',
        'long_description' => 'nullable|string',
        'flavours' => 'nullable|array',
        'product_photo.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        'variants' => 'required|array|min:1',
        'variants.*.size' => 'nullable|string',
        'variants.*.price' => 'required|numeric|min:0',
        'variants.*.stock' => 'required|integer|min:0',
        'variants.*.discount' => 'nullable|numeric|min:0|max:100',
    ]);

    DB::beginTransaction();

    try {
        $flavours = $request->input('flavours');
        // Update product basic info
        $product->update([
            'name' => $validated['name'],
            'slug' => Str::slug($validated['slug']),
            'category_id' => $validated['category_id'],
            'subcategory_id' => $validated['subcategory_id'],
            'short_description' => $validated['short_description'] ?? null,
            'long_description' => $validated['long_description'] ?? null,
            'flavours' => is_array($flavours) ? implode(',', $flavours) : null,
        ]);

        

        // Handle new uploaded images if any
        if ($request->hasFile('product_photo')) {
            foreach ($request->file('product_photo') as $file) {
                $imageName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $destinationPath = public_path('assets/product_images');

                // Create folder if it doesn't exist
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }

                // Move the file
                $file->move($destinationPath, $imageName);

                // Save the relative path to the DB using the relationship
                $product->images()->create([
                    'image' => 'assets/product_images/' . $imageName,
                ]);
            }
        }


        // Delete old variants and re-insert new variants (simplest way)
        $product->variants()->delete();

        foreach ($validated['variants'] as $variantData) {
            $product->variants()->create([
                'size' => $variantData['size'],
                'price' => $variantData['price'],
                'stock' => $variantData['stock'],
                'discount' => $variantData['discount'] ?? 0,
            ]);
        }

        DB::commit();

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully!');
    } catch (\Exception $e) {
        DB::rollBack();
        return back()->withErrors(['error' => 'Failed to update product: ' . $e->getMessage()])->withInput();
    }
}


public function productDetail($id)
{
    $product = Product::with(['category', 'subCategory', 'variants', 'images'])->findOrFail($id);
     $flavourIds = explode(',', $product->flavours ?? '');

    // Fetch flavour names from DB
    $flavours = DB::table('flavours')
                   ->whereIn('id', $flavourIds)
                   ->pluck('flavour_name')
                   ->toArray();
    return view('admin.product-detail', compact('product','flavours'));
}

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    
        return response()->json(['message' => 'Product deleted successfully']);
    }
    
}
