<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Blog;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    
    public function login(){
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'mobile'=>7233958662,
        //     'password' => bcrypt('admin@123'),
        //     'role' => 1
        // ]);
        return view('admin.sign-in');
    }


    public function doLogin(Request $request){
        $session_id = Session::getId();
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
          
            if ($user->role == 1) {
                
                return redirect()->route('admin.dashbord')->with('success', 'Welcome Admin!');
            } elseif ($user->role == 2) {
                Cart::where('session_id', $session_id)
                ->update([
                    'user_id' => $user->id,
                ]);
                    
                        $previousUrl = session()->get('previous_url', route('web.index'));

    
                    // If a previous URL exists, redirect to it, otherwise redirect to the 'web.index' route
                    return redirect()->to($previousUrl ? $previousUrl : route('web.index'))
                                     ->with('success', 'Welcome Customer!');
            } else {
                Auth::logout();
                return back()->with('error','Unauthorized role.');
            }
        }
    
        return back()->with('error', 'Invalid credentials');
    }

    public function registration(){
        return view('admin.registration');
    }
    public function doRegister(Request $request){
        // Validate input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'mobile' => 'required|digits:10|unique:users,mobile',
        'password' => 'required|string|min:6',
    ]);

    // Create the user
    $newUser = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'role' => 2,
        'password' => Hash::make($request->password),
    ]);

    // Login the user
    Auth::login($newUser);

    // Redirect to named route
    return redirect()->route('web.index');
    }

    public function dashbord(){

        $userCount = User::count();
        $categoryCount = Category::count();
        $subcategoryCount = Subcategory::count();
        $productCount = Product::count();
        $blogCount = Blog::count();

        return view('admin.dashbord', compact(
            'userCount',
            'categoryCount',
            'subcategoryCount',
            'productCount',
            'blogCount'
        ));

    }

    public function logout(){
        
        Auth::logout(); // Logs the user out
        return redirect()->route('login')->with('success', 'You have been logged out.');
    }






    public function index()
    {
        return view('admin.users');
    }

    // DataTables user data
    public function getData(Request $request)
    {
        $users = User::select('id', 'name', 'email', 'mobile', 'role', 'status');
        return DataTables::of($users)
            ->addColumn('role', function ($user) {
                return $user->role == 1 ? 'Admin' : 'User';
            })
            ->addColumn('status', function ($user) {
                return $user->status == 1 ? '<span class="badge badge-success">Active</span>' :
                    '<span class="badge badge-danger">Inactive</span>';
            })
            ->addColumn('action', function ($user) {
                return '
                    <button class="btn btn-sm btn-info editUser" data-id="' . $user->id . '">Edit</button>
                    <button class="btn btn-sm btn-danger deleteUser" data-id="' . $user->id . '">Delete</button>
                ';
            })
            ->rawColumns(['status', 'action'])
            ->make(true);
    }

    // Store new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'nullable|string|max:15',
            'password' => 'required|string|min:6'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->role = 2;
        $user->status = 1;
        $user->password = Hash::make($request->password);
        $user->status = 1;
        $user->save();

        return response()->json(['message' => 'User added successfully']);
    }

    // Get user data for edit
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    // Update user
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $id,
            'mobile' => 'nullable|string|max:15',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'nullable|string|min:6'
            ]);
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return response()->json(['message' => 'User updated successfully']);
    }

    // Delete user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }





   
}
