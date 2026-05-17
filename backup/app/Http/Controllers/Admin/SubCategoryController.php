<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;


class SubCategoryController extends Controller
{
    
    
public function index()
{
    $categories = Category::all();
    return view('admin.subcategory', compact('categories'));
}

public function store(Request $request)
{
    $request->validate([
        'subcategory_name' => 'required',
        'category_id' => 'required|exists:categories,id',
        'subcat_description' => 'nullable',
         'subcat_slug' => 'required|string|max:255|unique:sub_categories,subcat_slug',
        'subcategory_photo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
    ]);

    $photoPath = null;

    if ($request->hasFile('subcategory_photo')) {
        $image = $request->file('subcategory_photo');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('assets/subcategory_photos');
    
        // Create folder if it doesn't exist
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
    
        // Move the file
        $image->move($destinationPath, $imageName);
    
        // Save the relative path
        $photoPath = 'assets/subcategory_photos/' . $imageName;
    }
    

    SubCategory::create([
        'name' => $request->subcategory_name,
        'description' => $request->subcat_description,
        'category_id' => $request->category_id,
        'subcat_slug'=>$request->subcat_slug,
        'photo' => $photoPath,
        'status' => 1,
    ]);

    return response()->json(['status' => 'success', 'message' => 'SubCategory added successfully']);
}

public function getSubCategories()
{
    return datatables()->of(SubCategory::with('category'))
        ->addColumn('image', fn($row) => '<img src="'.($row->photo ? asset($row->photo) : asset('assets/img/category/default.png')).'" width="50">')
        ->addColumn('category_name', fn($row) => $row->category->name ?? '')
        ->addColumn('status', fn($row) => $row->status ? 'ACTIVE' : 'INACTIVE')
        ->addColumn('action', fn($row) => '
            <div class="btn-group">
                <button class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                    <span class="sr-only">Info</span>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item editSubCategory" href="#" data-id="'.$row->id.'">Edit</a>
                    <a class="dropdown-item deleteSubCategory" href="#" data-id="'.$row->id.'">Delete</a>
                </div>
            </div>')
        ->rawColumns(['image', 'action'])
        ->make(true);
}

public function edit($id)
{
    return response()->json(SubCategory::findOrFail($id));
}

public function update(Request $request, $id)
{
    $subCategory = SubCategory::findOrFail($id);

    $path = $subCategory->photo;

    if ($request->hasFile('subcategory_photo')) {
        // Delete old image if it exists
        if ($path && file_exists(public_path($path))) {
            unlink(public_path($path));
        }
    
        $image = $request->file('subcategory_photo');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('assets/subcategory_photos');
    
        // Create directory if it doesn't exist
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
    
        // Move file
        $image->move($destinationPath, $imageName);
    
        // Save relative path
        $path = 'assets/subcategory_photos/' . $imageName;
    }
    
    // Finally, update the subcategory photo path
    $subCategory->photo = $path;
    

    $subCategory->update([
        'name' => $request->subcategory_name,
        'subcat_slug'=>$request->subcat_slug,
        'description' => $request->subcat_description,
        'category_id' => $request->category_id,
        'photo' => $path,
    ]);

    return response()->json(['message' => 'SubCategory updated successfully']);
}

public function destroy($id)
{
    $subCategory = SubCategory::findOrFail($id);
    if ($subCategory->photo && Storage::disk('public')->exists($subCategory->photo)) {
        Storage::disk('public')->delete($subCategory->photo);
    }
    $subCategory->delete();

    return response()->json(['message' => 'SubCategory deleted successfully']);
}

}
