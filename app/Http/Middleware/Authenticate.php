<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login');
        
        if (!auth()->check()) {
            // Store the current URL in the session before redirecting to login
            session()->put('previous_url', url()->current());
    
            // Redirect to login page
            return route('login');
        }
    
        // If the user is authenticated, you can handle other logic (if needed)
        return null;
    }
}
