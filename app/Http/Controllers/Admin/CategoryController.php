<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.main_category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'cat_slug' => 'required|string|max:255|unique:categories,cat_slug',
            'cat_description' => 'nullable',
            'category_photo' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
        ]);

        $photoPath = null;

        if ($request->hasFile('category_photo')) {
            $image = $request->file('category_photo');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/category_photos');
        
            // Create the folder if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
        
            $image->move($destinationPath, $imageName);
        
            // Save the relative path
            $photoPath = 'assets/category_photos/' . $imageName;
        }
        

        $category = Category::create([
            'name' => $request->category_name,
            'cat_slug'=>$request->cat_slug,
            'description' => $request->cat_description,
            'photo' => $photoPath,
            'status' => 1,
        ]);

        return response()->json(['status' => 'success', 'message' => 'Category added successfully']);
    }

    public function getCategories()
    {
        return datatables()->of(Category::query())
            ->addColumn('image', function ($row) {
                $url = $row->photo ? asset($row->photo) : asset('assets/img/category/default.png');
                return '<img src="' . $url . '" class="cat-thumb" width="50">';
            })
        
            ->addColumn('status', function ($row) {
                return $row->status ? 'ACTIVE' : 'INACTIVE';
            })
            ->addColumn('action', function ($row) {
                return '<div class="btn-group">
                    <button class="btn btn-outline-success">Info</button>
                    <button class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                        <span class="sr-only">Info</span>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item editCategory" href="#" data-id="'.$row->id.'">Edit</a>
                        <a class="dropdown-item deleteCategory" href="#" data-id="'.$row->id.'">Delete</a>
                    </div>
                </div>';
            })
            ->rawColumns(['image', 'action'])
            ->make(true);
    }

    public function edit($id)
    {
        return response()->json(Category::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

     

        $path = $category->photo;

        if ($request->hasFile('category_photo')) {
            // Delete old image if exists
            if ($path && file_exists(public_path($path))) {
                unlink(public_path($path));
            }

            $image = $request->file('category_photo');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/category_photos');

            // Create folder if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $image->move($destinationPath, $imageName);

            // Save new path
            $path = 'assets/category_photos/' . $imageName;
        }

        // Finally, update the category photo path
        $category->photo = $path;



        $category->update([
            'name' => $request->category_name,
             'cat_slug'=>$request->cat_slug,
            'description' => $request->cat_description,
            'photo' => $path,
        ]);

        return redirect()->back()->with('success', 'Category updated successfully');
    }



    public function destroy($id)
{
    $category = Category::findOrFail($id);

    // Delete the photo file if exists
    if ($category->photo && Storage::disk('public')->exists($category->photo)) {
        Storage::disk('public')->delete($category->photo);
    }

    $category->delete();

    return response()->json(['message' => 'Category deleted successfully.']);
}



}

