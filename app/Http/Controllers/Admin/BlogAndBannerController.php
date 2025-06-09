<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

use App\Models\Blog;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class BlogAndBannerController extends Controller
{
    

public function banner_list()
{
    return view('admin.banner_list');
}

public function banner_store(Request $request)
{
   

    $request->validate([
        'banner_name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048' // 2MB max size (2048 KB)
    ]);


    $banner = $request->banner_id ? Banner::findOrFail($request->banner_id) : new Banner();
    $banner->name = $request->banner_name;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('assets/banners');
    
        // Create folder if it doesn't exist
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
    
        $image->move($destinationPath, $imageName);
    
        // Save path relative to public folder
        $banner->image = 'assets/banners/' . $imageName;
    }

    $banner->save();

    return response()->json(['message' => $request->banner_id ? 'Banner updated successfully.' : 'Banner added successfully.']);
}

public function banner_edit($id)
{
    $banner = Banner::findOrFail($id);
    return response()->json($banner);
}

public function banner_destroy($id)
{
    $banner = Banner::findOrFail($id);
    $banner->delete();

    return response()->json(['message' => 'Banner deleted successfully.']);
}

public function banner_data()
{
    $banners = Banner::select(['id', 'name', 'image', 'created_at']);

    return DataTables::of($banners)
        ->addColumn('image', function ($row) {
            return '<img src="' . asset($row->image) . '" height="50">';
        })
        ->addColumn('status', function () {
            return '<span class="badge badge-success">Active</span>';
        })
        ->addColumn('action', function ($row) {
            return '
                <button class="btn btn-sm btn-primary editBanner" data-id="'.$row->id.'">Edit</button>
                <button class="btn btn-sm btn-danger deleteBanner" data-id="'.$row->id.'">Delete</button>
            ';
        })
        ->rawColumns(['image', 'status', 'action'])
        ->make(true);
}




public function blog_index()
    {
        return view('admin.blog_list');
    }

    public function blog_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $request->blog_id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'keywords' => 'nullable|string',
            'blog_content' => 'required|string',
            'feature_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'status' => 'required|boolean',
        ]);

        $blog = $request->blog_id ? Blog::findOrFail($request->blog_id) : new Blog();
        $blog->name = $request->name;
        $blog->slug = Str::slug($request->slug);
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->keywords = $request->keywords;
        $blog->blog_content = $request->blog_content;
        $blog->status = $request->status;
        if ($request->hasFile('feature_image')) {
            $image = $request->file('feature_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/blogs');
        
            // Create folder if not exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
        
            $image->move($destinationPath, $imageName);
        
            // Save relative path
            $blog->feature_image = 'assets/blogs/' . $imageName;
        }
        

        $blog->save();

        return response()->json(['message' => $request->blog_id ? 'Blog updated successfully.' : 'Blog added successfully.']);
    }

    public function blog_edit($id)
    {
        $blog = Blog::findOrFail($id);
        return response()->json($blog);
    }

    public function blog_destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully.']);
    }

    public function blog_data()
    {
        $blogs = Blog::select(['id', 'name', 'slug', 'status', 'feature_image', 'created_at']);

        return DataTables::of($blogs)
            ->addColumn('feature_image', function ($row) {
                return '<img src="' . asset($row->feature_image) . '" height="50">';
            })
            ->addColumn('status', function ($row) {
                return $row->status ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>';
            })
            ->addColumn('action', function ($row) {
                return '
                    <button class="btn btn-sm btn-primary editBlog" data-id="' . $row->id . '">Edit</button>
                    <button class="btn btn-sm btn-danger deleteBlog" data-id="' . $row->id . '">Delete</button>
                ';
            })
            ->rawColumns(['feature_image', 'status', 'action'])
            ->make(true);
    }


    public function uploadImage(Request $request)
{
    if ($request->hasFile('upload')) {
        $file = $request->file('upload');
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('public/blog_images', $filename);

        // Return the URL to CKEditor in required format
        return response()->json([
            'url' => asset('storage/blog_images/' . $filename)
        ]);
    }

    return response()->json(['error' => 'No file uploaded.'], 400);
}


}