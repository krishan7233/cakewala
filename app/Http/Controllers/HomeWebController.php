<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Blog;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Query;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\DeliveryAddress;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\ManualOrder;

use Illuminate\Support\Facades\Session;
class HomeWebController extends Controller
{
    //
    
    public function queryForm(){
    return view('website.query-form');
}

public function querySave(Request $request){

        $request->validate([
            'weight' => 'required|string',
            'reference_photo' => 'nullable|image|mimes:jpeg,png,jpg',
            'details' => 'nullable|string',
            'receiver_name' => 'nullable|string',
            'contact_number' => 'nullable|string',
            'city' => 'nullable|string',
            'date_time' => 'nullable|string',
        ]);

        $queryData = $request->only(['weight','details','receiver_name','contact_number','city','date_time']);
        if ($request->hasFile('reference_photo')) {
            $reference_photo = $request->file('reference_photo');
            $reference_photo_name = date('d-m-Y').'-'.time().'-'.$reference_photo->getClientOriginalName();
            $reference_photo->move('query-document', $reference_photo_name);
            $queryData['reference_photo'] = $reference_photo_name;
        }
        Query::create($queryData);

        return response()->json([
            'status' => 'success',
            'message' => 'Query submitted successfully!',
 ]);
}
    public function search(Request $request)
    {
        $query = $request->input('q');
            $slug = Str::slug($query);

        $category = Category::where('cat_slug', $slug)->first();
        if ($category) {
            return redirect()->route('product.by.category', ['cat_slug' => $category->cat_slug]);
        }
        return redirect()->back()->with('error', 'No matching category found.');
    }


    public function index(){
        // $banners = Banner::where('status','1')->get();

        // return view('website.home',compact('banners'));
        
         $banners = Banner::where('status','1')->get();
        $categorys = Category::where('status','1')->take(8)->get();
        $gift_categorys = Category::where('status','1')->take(8)->get();
        $categoryIds = [167, 216];
        $products = Product::with(['category', 'subcategory', 'variants', 'images'])
           ->whereIn('category_id', $categoryIds)
            ->take(4)
            ->get();
            
            
            
        
        $kidscake_products = Product::with(['category', 'subcategory', 'variants', 'images'])
           ->whereIn('category_id', ['216'])
            ->take(4)
            ->get();
            
        
        $designer_cakes_products = Product::with(['category', 'subcategory', 'variants', 'images'])
           ->whereIn('category_id', ['167'])
            ->take(4)
            ->get();
            
            
        $combos_hampers = Product::with(['category', 'subcategory', 'variants', 'images'])
            ->take(4)
            ->get();
            

             $festive_seasonal_prpduct = Product::with(['category', 'subcategory', 'variants', 'images'])
           ->whereIn('category_id', ['312'])
            ->take(4)
            ->get();
            
            
        

        return view('website.home',compact('banners','categorys','products','kidscake_products','designer_cakes_products','combos_hampers','festive_seasonal_prpduct','gift_categorys'));
    }
    
    public function user_profile(){
                return view('website.user-profile');

    }
    
    //   public function product_by_category(Request $request,$cat_slug)
    // {
    //     // Find the category based on slug
    //     $category = Category::where('cat_slug', $cat_slug)->firstOrFail();

    //     // Fetch products based on the category ID
    //     $products = Product::with(['category', 'subcategory', 'variants', 'images'])
    //         ->where('category_id', $category->id)
    //         ->paginate(40);

    //     // Return view with products
    //     return view('website.category_to_product_list', compact('products', 'category'));
    // }


    public function product_by_category(Request $request, $cat_slug)
{
    // Find the category based on slug
    $category = Category::where('cat_slug', $cat_slug)->firstOrFail();

    // Base query for products with relationships
    $productsQuery = Product::with(['category', 'subcategory', 'variants', 'images'])
        ->where('category_id', $category->id);

    // Price filter logic (based on variants)
    if ($request->has('minPrice') || $request->has('maxPrice')) {
        $minPrice = $request->input('minPrice', 0);
        $maxPrice = $request->input('maxPrice', PHP_INT_MAX);

        $productsQuery->whereHas('variants', function ($query) use ($minPrice, $maxPrice) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        });
    }

    // Sorting logic
    // if ($request->has('sort')) {
    //     $sort = $request->input('sort');
    //     if ($sort == 'priceLowHigh') {
    //         $productsQuery->withMin('variants', 'price')->orderBy('variants_min_price');
    //     } elseif ($sort == 'priceHighLow') {
    //         $productsQuery->withMax('variants', 'price')->orderByDesc('variants_max_price');
    //     }
    // }
    
    
   // Flavour filtering
if ($request->has('flavour') && !empty($request->input('flavour'))) {
    $flavour = $request->input('flavour');
    // Assuming your products table has a 'flavours' column storing IDs like "1,2,3"
    $productsQuery->whereRaw("FIND_IN_SET(?, flavours)", [$flavour]);
}


    // Final products
    $products = $productsQuery->paginate(40);
    
   $flavours = DB::table('flavours')
                ->where('status','1')
                ->pluck('flavour_name', 'id') // id = key, flavour_name = value
                ->toArray();
    return view('website.category_to_product_list', compact('products', 'category','flavours'));
}

public function allproductlist(Request $request){
    
        // Find the category based on slug
    $category = Category::all();

    // Base query for products with relationships
    $productsQuery = Product::with(['category', 'subcategory', 'variants', 'images']);
        // ->where('category_id', $category->id);

    // Price filter logic (based on variants)
    if ($request->has('categoryFilter')) {
        $categoryFilter = $request->input('categoryFilter');
        $productsQuery->where('category_id', $categoryFilter);
       
    }

    if ($request->has('minPrice') || $request->has('maxPrice')) {
        // $minPrice = $request->input('minPrice', 0);
        // $maxPrice = $request->input('maxPrice', PHP_INT_MAX);
$minPrice = (float) str_replace(',', '', $request->input('minPrice', 0));
$maxPrice = (float) str_replace(',', '', $request->input('maxPrice', 99999999));

       $productsQuery->whereHas('variants', function ($query) use ($minPrice, $maxPrice) {
        $query->whereBetween('price', [$minPrice, $maxPrice]);
    });
    }



    // Final products
    $products = $productsQuery->paginate(40);
    
   $flavours = DB::table('flavours')
                ->where('status','1')
                ->pluck('flavour_name', 'id') // id = key, flavour_name = value
                ->toArray();
    return view('website.allproduct', compact('products','category','flavours'));
}
    
     public function product_detail($cat_slug, $product_slug)
    {
        $query = Product::with(['category', 'subcategory', 'variants', 'images'])
            ->where('slug', $product_slug)
            ->whereHas('category', function ($q) use ($cat_slug) {
                $q->where('cat_slug', $cat_slug);
            });
    
   
        
        $product = $query->firstOrFail();
        $wishlistProductIds = Auth::check() ? Auth::user()->wishlist()->pluck('product_id')->toArray() : [];
        
       $flavours = [];
        if (!empty($product->flavours)) {
            $flavourIds = explode(',', $product->flavours);
            $flavours = DB::table('flavours')
                ->whereIn('id', $flavourIds)
                ->where('status','1')
                ->pluck('flavour_name')
                ->toArray();
        }
        
          $category = Category::where('cat_slug', $cat_slug)->firstOrFail();
        $productsQuery = Product::with(['category', 'subcategory', 'variants', 'images'])
            ->where('category_id', $category->id)->take(6)->get();
            
        $cat_f=['party-accessories'];
        $related_product_query = Product::with(['category', 'subcategory', 'variants', 'images'])
            ->whereHas('category', function ($q) use ($cat_f) {
                $q->whereIn('cat_slug', $cat_f);
            })->get();
        // dd($related_product_query);
        return view('website.product_detail', compact('product','related_product_query','wishlistProductIds','flavours','productsQuery'));
    }
    

    public function product_subcat_detail($cat_slug, $subcat_slug = null, $product_slug)
    {
        $query = Product::with(['category', 'subcategory', 'variants', 'images'])
                    ->where('slug', $product_slug)
                    ->whereHas('category', function ($q) use ($cat_slug) {
                        $q->where('cat_slug', $cat_slug);
                    });
    
        if ($subcat_slug) {
            $query->whereHas('subcategory', function ($q) use ($subcat_slug) {
                $q->where('subcat_slug', $subcat_slug);
            });
        }
    
        $product = $query->firstOrFail();
    
        $wishlistProductIds = Auth::check() ? Auth::user()->wishlist()->pluck('product_id')->toArray() : [];
        
          $category = Category::where('cat_slug', $cat_slug)->firstOrFail();
        $productsQuery = Product::with(['category', 'subcategory', 'variants', 'images'])
            ->where('category_id', $category->id)->take(6)->get();
        
            $flavours = [];
        if (!empty($product->flavours)) {
            $flavourIds = explode(',', $product->flavours);
            $flavours = DB::table('flavours')
                ->whereIn('id', $flavourIds)
                ->where('status','1')
                ->pluck('flavour_name')
                ->toArray();
        }
        
        $cat_f=['party-accessories'];
        $related_product_query = Product::with(['category', 'subcategory', 'variants', 'images'])
            ->whereHas('category', function ($q) use ($cat_f) {
                $q->whereIn('cat_slug', $cat_f);
            })->get();
        return view('website.product_detail', compact('product', 'related_product_query','wishlistProductIds','flavours','productsQuery'));
    }
    
  
    public function cart()
    {
        // DB::enableQueryLog();

        $session_id = Session::getId();


        $query = Cart::with(['product', 'product.images', 'variant']);

            if(auth()->check()) {
                // logged in user: fetch carts for user OR current session
                $query->where(function($q) use ($session_id) {
                    $q->where('user_id', auth()->id())
                    ->orWhere('session_id', $session_id);
                });
            } else {
                // guest user: fetch carts only for the session
                $query->where('session_id', $session_id);
            }

            $cartItems = $query->get();
            
            
             $cartProductIds = $cartItems->pluck('product_id')->toArray();

            $cartProductData = Product::whereIn('id', $cartProductIds)
            ->get(['category_id', 'subcategory_id']);
            
            $categoryIds = $cartProductData->pluck('category_id')->unique()->toArray();
            $subCategoryIds = $cartProductData->pluck('sub_category_id')->unique()->toArray();

            $similearproductsQuery = Product::with(['category', 'subcategory', 'variants', 'images'])
            ->where(function($query) use ($categoryIds, $subCategoryIds) {
                $query->whereIn('category_id', $categoryIds)
                    ->orWhereIn('subcategory_id', $subCategoryIds);
            })
            ->whereNotIn('id', $cartProductIds) // Exclude cart products
            ->take(4) // Limit to 4 products
            ->get();

        return view('website.cart', compact('cartItems','similearproductsQuery'));
    }
    
    

    

    public function checkout()
{

    
     $session_id = Session::getId();
    $query = Cart::with(['product', 'product.images', 'variant']);

    if(auth()->check()) {
        // logged in user: fetch carts for user OR current session
        $query->where(function($q) use ($session_id) {
            $q->where('user_id', auth()->id())
            ->orWhere('session_id', $session_id);
        });
    } else {
        // guest user: fetch carts only for the session
        $query->where('session_id', $session_id);
    }

    $cartItems = $query->get();

    // $cartItems = Cart::with(['product.images', 'variant'])->where('session_id', session()->getId())->get();

    $mrpTotal = $cartItems->sum(fn($item) => $item->price * $item->quantity);
    $discount = $cartItems->sum(fn($item) => ($item->discount ?? 0) * $item->quantity);
    $deliveryCharge = $cartItems->sum(fn($item) => $item->shipping_charge ?? 0);

    $convenienceCharge = 0;
    // $deliveryCharge = 0; // Or set as needed

    $totalAmount = ($mrpTotal - $discount) + $convenienceCharge + $deliveryCharge;

    $latestAddress = DeliveryAddress::where('user_id', auth()->id())
    ->latest() // This uses created_at to sort by latest
    ->first();
    

    return view('website.checkout', compact('cartItems', 'mrpTotal', 'discount', 'deliveryCharge', 'convenienceCharge', 'totalAmount','latestAddress'));
}




    public function addToCart(Request $request)
    {
        
       $validationRules = [
            'product_id' => 'required|exists:products,id',
            'variant_id' => 'nullable|exists:product_variants,id',
            'delivery_date' => 'required',
            'delivery_time' => 'required',
            'shipping_type' => 'required',
            'product_message' => 'nullable',
            'order_image' => 'nullable',  // Default rule: image is not required
            'quantity' => 'nullable|integer|min:1'
        ];
        // $request->validate([
        //     'product_id' => 'required|exists:products,id',
        //     'variant_id' => 'nullable|exists:product_variants,id',
        //     'delivery_date' => 'required',
        //     'delivery_time' => 'required',
        //     'shipping_type' => 'required',
        //     'product_message'=>'nullable',
        //     'order_image'=>'nullable',
        //     'quantity' => 'nullable|integer|min:1'
        // ]);
        
        $product = Product::findOrFail($request->product_id);
        if ($product->category_id == '323') {
            $validationRules['order_image'] = 'required|image|max:5000'; // Adjust size limit if necessary
        }
        
        // Validate the request with dynamically set rules
        $request->validate($validationRules);
        
        $session_id = Session::getId();
        $product_id = $request->product_id;
        $variant_id = $request->variant_id;
        $quantity = $request->quantity ?? 1;
        
        $deliveryDate = $request->delivery_date; // e.g., 2025-06-01
        $time_slot = $request->delivery_time; // e.g., 14:30
        $product_message=$request->product_message;
        // Combine into single datetime format
        // $deliveryDatetime = date('Y-m-d H:i:s', strtotime("$deliveryDate $deliveryTime"));

        $shipping_type=$request->shipping_type;
        // Find the product + variant
        // $product = Product::findOrFail($product_id);
        // $product->category_id
        $variant = $variant_id ? $product->variants()->findOrFail($variant_id) : null;
    
        // Calculate the price (considering discount if applicable)
        $price = $variant ? ($variant->discount_price ?? $variant->price) : ($product->variants->first()->discount_price ?? 0);
        
        
        $photoPath = null;

        if ($request->hasFile('order_image')) {
            $image = $request->file('order_image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('assets/order_image');
        
            // Create the folder if it doesn't exist
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
        
            $image->move($destinationPath, $imageName);
        
            // Save the relative path
            $photoPath = 'assets/order_image/' . $imageName;
        }
        
        // Check if the same product + variant is already in the current user's cart
        $existingCart = Cart::where('session_id', $session_id)
                            ->where('product_id', $product_id)
                            ->where('variant_id', $variant_id)
                            ->first();
    
        if ($existingCart) {
            // ❌ Same product + variant already in cart for this session: show error
            return response()->json([
                'status' => 'success',
                'message' => 'This product is already in your cart!'
            ]);
        } else {
            // ✅ New entry for this session
            Cart::create([
                'session_id' => $session_id,
                'user_id'=> auth()->id() ?? 0,
                'product_id' => $product_id,
                'variant_id' => $variant_id,
                'quantity' => $quantity,
                'price' => $price,
                'discount' => $variant ? $variant->discount : null,
                'shipping_charge'=>$shipping_type,
                'delivery_date'=>$deliveryDate,
                'time_slot'=>$time_slot,
                'product_message'=>$product_message,
                'order_image'=>$photoPath,
            ]);
    
            return response()->json([
                'status' => 'success',
                'message' => 'Product added to cart!'
            ]);
        }
    }

    
    
     public function addcartwithAddons(Request $request)
    {
        $addons = $request->input('addons');
        $session_id = Session::getId();
        if (empty($addons) || !is_array($addons)) {
            return response()->json(['status' => 'success','message' => 'No addons provided']);
        }

        try {
            foreach ($addons as $addon) {
                $product_id=$addon['productId'];
                $variant_id=$addon['variantId'];
                 $product = Product::findOrFail($product_id);
                $variant = $variant_id ? $product->variants()->findOrFail($variant_id) : null;
    
        // Calculate the price (considering discount if applicable)
        $price = $variant ? ($variant->discount_price ?? $variant->price) : ($product->variants->first()->discount_price ?? 0);
    
               $cart = Cart::updateOrCreate(
                    [
                        'session_id' => $session_id,
                        'product_id' => $product_id,
                        'variant_id' => $variant_id,
                    ],
                    [
                        'user_id' => auth()->id() ?? 0,
                        'quantity' => $addon['quantity'],
                        'price' => $price,
                        'discount' => $variant ? $variant->discount : 0
                    ]
                );

            }

            return response()->json(['status' => 'success','message' => 'Add-ons added to cart successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error','message' => 'Something went wrong', 'error' => $e->getMessage()]);
        }
    }
    


    public function updateCartQty(Request $request)
{
    $cartItemId = $request->cart_item_id;
    $action = $request->action;

    $cartItem = Cart::find($cartItemId);

    if (!$cartItem) {
        return response()->json(['status' => 'error', 'message' => 'Cart item not found.']);
    }

    // Check product stock
    $availableStock = $cartItem->variant ? $cartItem->variant->stock : $cartItem->product->stock;

    if ($action === 'increase') {
        // if ($cartItem->quantity < $availableStock) {
            $cartItem->quantity += 1;
            $cartItem->save();
        // } 
        // else {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Maximum stock limit reached!'
        //     ]);
        // }
    } elseif ($action === 'decrease') {
        if ($cartItem->quantity > 1) {
            $cartItem->quantity -= 1;
            $cartItem->save();
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Minimum quantity is 1.'
            ]);
        }
    }

    // Recalculate total price
    $cartItems = Cart::where('session_id', session()->getId())->get();
    $totalPrice = 0;

    foreach ($cartItems as $item) {
        $totalPrice += $item->price * $item->quantity;
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Quantity Updated',
        'new_quantity' => $cartItem->quantity,
        'item_total' => $cartItem->price * $cartItem->quantity,
        'total_price' => number_format($totalPrice, 2)
    ]);
}


    public function deletecartitem(Request $request)
{
    $cartItemId = $request->cart_item_id;
    // Find the cart item
    $cartItem = Cart::find($cartItemId);

    if (!$cartItem) {
        return response()->json([
            'status' => 'error',
            'message' => 'Cart item not found.'
        ], 404);
    }

    // Delete the cart item
    $cartItem->delete();

    return response()->json([
        'status' => 'success',
        'message' => 'Item removed from cart.'
    ]);
}


public function about_us(){
    
    return view('website.about-us');    
}


public function contact_us(){
    
    return view('website.contact_us');    
}

public function coupon(){
    $couponlist=Coupon::all();
    return view('website.coupon',compact('couponlist'));    
}

public function terms_conditions(){
    
    return view('website.terms_conditions');    
}


public function blog(){
    $blogs = Blog::where('status','1')->paginate(12);
    
    return view('website.blog',compact('blogs'));    
}

public function blog_detaills($blog_slug){
        $blogs = Blog::where('slug',$blog_slug)->first();
       $recentblogs = Blog::where('status', '1')
                   ->orderBy('created_at', 'desc')
                   ->take(5)
                   ->get();

return view('website.blog_detaills',compact('blogs','recentblogs')); 
}

public function manual_order_form(){
    
    return view('website.manual_order_form');    
}


public function Affiliate_Program(){
    
    return view('website.Affiliate_Program');    
}

public function testing(){
    
    return view('website.checkout_current');    
}



public function add(Request $request)
    {
        
         if (!auth()->check()) {
        return response()->json([
            'status' => 'error',
            'message' => 'You must be logged in to add items to your wishlist.',
        ]); // 401 = Unauthorized
    }
    
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $wishlist = Wishlist::firstOrCreate([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Product added to wishlist',
            'data' => $wishlist,
        ]);
    }

    public function remove(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        Wishlist::where('user_id', auth()->id())
            ->where('product_id', $request->product_id)
            ->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Product removed from wishlist',
        ]);
    }

    public function wishlist_index()
    {
    
    
    $wishlist = Wishlist::with([
    'product.category',    // Load product's category
    'product.subcategory', // Load product's subcategory
    'product.images',      // Load product's images
    'product.variants'     // Load product's variants
])
->where('user_id', auth()->id())
  ->paginate(12);


            
    
    return view('website.wishlist',compact('wishlist')); 

    }





public function order_list(){
    
     $userId = auth()->id();

    $orders = Order::with(['items.product','users_address'])
                    ->where('user_id', $userId)
                    ->orderBy('created_at', 'desc')
                    ->get();
                 
    return view('website.order_list',compact('orders')); 
}



    public function dilivery_address_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'landmark' => 'nullable|string',
            'pincode' => 'required|string',
            'city' => 'required|string',
            'mobile' => 'required|string',
            'alt_mobile' => 'nullable|string',
        ]);

        $deliveryAddress = DeliveryAddress::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'address' => $request->address,
            'landmark' => $request->landmark,
            'pincode' => $request->pincode,
            'city' => $request->city,
            'mobile' => $request->mobile,
            'alt_mobile' => $request->altMobile,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Address saved successfully!',
            'data' => $deliveryAddress
        ]);
    }


public function manualOrderSubmit(Request $request)
{

    $validated = $request->validate([
        'date' => 'required|date',
        'timing' => 'required',
        'address' => 'nullable|string',
        'receiver_name' => 'required|string',
        'contact_number' => 'nullable|string',
        'alternate_number' => 'nullable|string',
        'occasion' => 'nullable|string',
        'cake_message' => 'nullable|string',
        'flavour' => 'required|string',
        'weight' => 'required|string',
        'reference_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);
        if ($request->hasFile('reference_photo')) {
            $reference_photo = $request->file('reference_photo');
            $reference_photo_name = date('d-m-Y').'-'.time().'-'.$reference_photo->getClientOriginalName();
            $reference_photo->move('manual-document', $reference_photo_name);
            $validated['reference_photo'] = $reference_photo_name;
        }


    // Save to database
    ManualOrder::create($validated);

    return response()->json([
        'status' => 'success',
        'message' => 'Manual order saved successfully!'

    ]);
}

public function coupon_check(Request $request)
    {
        
         $user_id = auth()->id();
         
        $coupon = DB::table('coupons')
                    ->where('code', $request->coupon_code)
                    ->first();

        if (!$coupon) {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid coupon code.'
            ]);
        }

        if ($coupon->end_date && now()->gt($coupon->end_date)) {
            return response()->json([
                'status' => 'error',
                'message' => 'This coupon has expired.'
            ]);
        }
        
           $couponUsed = DB::table('orders')
                    ->where('user_id', $user_id)
                    ->where('coupon_id', $coupon->id)
                    ->exists();
        
            if ($couponUsed) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You have already used this coupon.'
                ]);
            }
        return response()->json([
            'status' => 'success',
            'message' => 'Coupon applied successfully!',
            'discount' => $coupon->discount_value ?? 0
        ]);
    }



}
