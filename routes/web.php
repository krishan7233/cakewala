<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BlogAndBannerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\HomeWebController;

use App\Http\Controllers\ManualOrderController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\QueryController;
use App\Http\Controllers\GoogleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/clear-config-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('route:cache');
    Artisan::call('view:cache');


    return "Config and cache cleared and re-cached successfully.";
});


Route::get('/', [AuthController::class,'login'])->name('login');
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google_login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::post('doLogin', [AuthController::class,'doLogin'])->name('doLogin');
Route::get('registration', [AuthController::class,'registration'])->name('registration');
Route::post('doRegister', [AuthController::class,'doRegister'])->name('doRegister');

Route::middleware('auth')->group(function () {
    Route::get('dashbord', [AuthController::class,'dashbord'])->name('admin.dashbord');
    
    Route::get('admin/categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('admin/categories/data', [CategoryController::class, 'getCategories'])->name('admin.categories.data');
    Route::get('admin/categories/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::post('admin/categories/{id}/update', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('admin/categories/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');



    Route::get('admin/subcategories', [SubCategoryController::class, 'index'])->name('admin.subcategories');
    Route::get('admin/subcategories/data', [SubCategoryController::class, 'getSubCategories'])->name('admin.subcategories.data');
    Route::post('admin/subcategories/store', [SubCategoryController::class, 'store']);
    Route::get('admin/subcategories/{id}/edit', [SubCategoryController::class, 'edit']);
    Route::post('admin/subcategories/{id}/update', [SubCategoryController::class, 'update']);
    Route::delete('admin/subcategories/{id}', [SubCategoryController::class, 'destroy']);




    Route::get('admin/users', [AuthController::class, 'index'])->name('users.index');
    Route::get('admin/users/data', [AuthController::class, 'getData'])->name('users.data');
    Route::post('admin/users/store', [AuthController::class, 'store'])->name('users.store');
    Route::get('admin/users/{id}/edit', [AuthController::class, 'edit'])->name('users.edit');
    Route::post('admin/users/{id}/update', [AuthController::class, 'update'])->name('users.update');
    Route::delete('admin/users/{id}', [AuthController::class, 'destroy'])->name('users.destroy');

   Route::prefix('admin')->name('admin.')->group(function () {
        Route::delete('image-delete/{id}', [ProductController::class, 'deleteImage'])->name('delete.image');
        Route::get('/manual-order', [ManualOrderController::class, 'manualOrder'])->name('manualOrder');
        Route::get('/manual-order-view/{id}', [ManualOrderController::class, 'manualOrderView'])->name('manualOrderView');
        Route::get('/orders', [OrderController::class, 'index'])->name('orders');
        Route::post('/order-update-status', [OrderController::class, 'updateStatus'])->name('order.update_status');
        Route::get('/coupons', [CouponController::class, 'coupon'])->name('coupons');
        Route::get('/coupons-edit/{id}', [CouponController::class, 'couponEdit'])->name('coupons.edit');
        Route::put('/coupons-update/{id}', [CouponController::class, 'couponUpdate'])->name('coupons.update');
        Route::get('/coupons-add', [CouponController::class, 'couponAdd'])->name('coupons.add');
        Route::post('/coupons-save', [CouponController::class, 'couponSave'])->name('coupons.save');
        Route::delete('/admin-coupons-destroy/{id}', [CouponController::class, 'destroy'])->name('coupons.destroy');
        Route::get('/order-item-show/{id}', [OrderController::class, 'orderItemShow'])->name('order.item.show');
Route::get('/query-list', [QueryController::class, 'queryList'])->name('queryList');
});

    Route::prefix('admin/products')->name('admin.products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/data', [ProductController::class, 'productlist_data'])->name('productlist_data'); 
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::get('/subcategories-by-category/{categoryId}', [ProductController::class, 'getByCategory']);
        Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::match(['put', 'patch'], '/{id}/update', [ProductController::class, 'update'])->name('update');
        Route::delete('/{id}', [ProductController::class, 'destroy'])->name('destroy');
        Route::get('/product-detail/{id}', [ProductController::class, 'productDetail'])->name('detail');

    });


  
    Route::get('/banners', [BlogAndBannerController::class, 'banner_list'])->name('admin.banners.index');
    Route::post('/banners/store', [BlogAndBannerController::class, 'banner_store'])->name('admin.banners.store');
    Route::get('/banners/{id}/edit', [BlogAndBannerController::class, 'banner_edit'])->name('admin.banners.edit');
    Route::delete('/banners/{id}', [BlogAndBannerController::class, 'banner_destroy'])->name('admin.banners.destroy');
    Route::get('/banners/data', [BlogAndBannerController::class, 'banner_data'])->name('admin.banners.data');
    Route::post('/banners/{id}/update', [BlogAndBannerController::class, 'banner_store'])->name('admin.banners.update');



    Route::get('/blogs', [BlogAndBannerController::class, 'blog_index'])->name('admin.blogs.index');
    Route::post('/blogs/store', [BlogAndBannerController::class, 'blog_store'])->name('admin.blogs.store');
    Route::get('/blogs/{id}/edit', [BlogAndBannerController::class, 'blog_edit'])->name('admin.blogs.edit');
    Route::delete('/blogs/{id}', [BlogAndBannerController::class, 'blog_destroy'])->name('admin.blogs.destroy');
    Route::get('/blogs/data', [BlogAndBannerController::class, 'blog_data'])->name('admin.blogs.data');


    // routes/web.php or routes/admin.php depending on your setup
Route::post('/blog/upload-image', [BlogAndBannerController::class, 'uploadImage'])->name('admin.blog.uploadImage');



});



Route::prefix('website')->group(function () {
    Route::get('/', [HomeWebController::class,'index'])->name('web.index');
    Route::get('/search', [HomeWebController::class, 'search'])->name('search');

    Route::get('/cart', [HomeWebController::class,'cart'])->name('product.cart');
    Route::middleware('auth')->group(function () {
    Route::get('/checkout', [HomeWebController::class,'checkout'])->name('product.checkout');
        Route::get('user-profile', [HomeWebController::class, 'user_profile'])->name('user-profile');
    });
    Route::get('/about-us', [HomeWebController::class,'about_us'])->name('about-us');
    Route::get('/contact-us', [HomeWebController::class,'contact_us'])->name('contact_us');
    Route::get('/coupon', [HomeWebController::class,'coupon'])->name('coupon');
    Route::get('/terms-conditions', [HomeWebController::class,'terms_conditions'])->name('terms_conditions');
                    
    Route::get('/blog', [HomeWebController::class,'blog'])->name('blog');
     Route::get('/allproduct', [HomeWebController::class,'allproductlist'])->name('allproduct');
    Route::get('/blog/{blog_slug}', [HomeWebController::class,'blog_detaills'])->name('blog_detaills');
                                        
    Route::get('/manual-order-form', [HomeWebController::class,'manual_order_form'])->name('manual_order_form');
    Route::get('/Affiliate-Program', [HomeWebController::class,'Affiliate_Program'])->name('Affiliate_Program');
                                        
    Route::get('/testing', [HomeWebController::class,'testing'])->name('testing');                                            
        Route::get('/order-list', [HomeWebController::class,'order_list'])->name('order_list');                                            

    Route::post('/update-cart-qty', [HomeWebController::class, 'updateCartQty'])->name('updateCartQty');

    Route::post('/delete-cart-item', [HomeWebController::class, 'deletecartitem'])->name('deletecartitem');
    Route::post('/save-delivery-address', [HomeWebController::class, 'dilivery_address_store'])->name('delivery.address.store');
    Route::post('/manual-order-submit', [HomeWebController::class, 'manualOrderSubmit'])->name('manual.order.submit');


    Route::get('wishlist', [HomeWebController::class, 'wishlist_index'])->name('wishlist.index');
    Route::post('wishlist/add', [HomeWebController::class, 'add'])->name('wishlist.add');
    Route::post('wishlist/remove', [HomeWebController::class, 'remove'])->name('wishlist.remove');

    Route::get('/{cat_slug}/{subcat_slug}/{product_slug}', [HomeWebController::class, 'product_subcat_detail'])->name('product.detail.withsub');

    // 2-segment route (product detail without subcat)
    Route::get('/{cat_slug}/{product_slug}', [HomeWebController::class, 'product_detail'])->name('product.detail');

    Route::get('/{cat_slug}', [HomeWebController::class,'product_by_category'])->name('product.by.category');

    Route::post('/product/add-to-cart', [HomeWebController::class, 'addToCart'])->name('product.addToCart');

   Route::post('product/add-addon-cart', [HomeWebController::class, 'addcartwithAddons'])->name('product.addcartwithAddons');
    Route::post('/check-coupon', [HomeWebController::class, 'coupon_check'])->name('api.check.coupon');

    
});

Route::post('/payment', [PaymentController::class, 'initiatePayment'])->name('payment.initiate');
Route::post('/offlinePayment', [PaymentController::class, 'offlinePayment'])->name('offlinePayment');
Route::post('/payment/response', [PaymentController::class, 'handleResponse'])->name('payment.response');
Route::get('/email-invoice', [PaymentController::class,'emailInvoice'])->name('emailInvoice');
Route::get('customize-cake',  [HomeWebController::class,'queryForm'])->name('queryForm');
    Route::post('query-save',  [HomeWebController::class,'querySave'])->name('querySave');

Route::get('logout', [AuthController::class,'logout'])->name('admin.logout');

