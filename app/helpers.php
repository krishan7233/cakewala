<?php

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

if (!function_exists('wishlist_count')) {
    function wishlist_count()
    {
        if (!Auth::check()) {
            return 0;
        }

        return Wishlist::where('user_id', Auth::id())->count();
    }
}


?>