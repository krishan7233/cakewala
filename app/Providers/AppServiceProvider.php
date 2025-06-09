<?php

namespace App\Providers;
use App\Models\Wishlist;
use App\Models\Cart;

use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
        $wishlistCount = 0;
        $cartCount = 0;

        $session_id = session()->getId();

        if (auth()->check()) {
            $wishlistCount = Wishlist::where('user_id', auth()->id())->count();
        }
        
       $query = Cart::query();

        if (auth()->check()) {
            $query->where(function($q) use ($session_id) {
                $q->where('user_id', auth()->id())
                  ->orWhere('session_id', $session_id);
            });
        } else {
            $query->where('session_id', $session_id);
        }

        $cartCount = $query->count();

        $cartCount = $query->count(); 
        
        $view->with([
            'cartCount' => $cartCount ?? 0,
            'wishlistCount' => $wishlistCount ?? 0,
        ]);
    });
    }
}
