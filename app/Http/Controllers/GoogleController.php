<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\Controller;
use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
class GoogleController extends Controller
{

public function redirectToGoogle()
    {
  
       $query = http_build_query([
    'client_id' => $GOOGLE_CLIENT_ID,
    'redirect_uri' => $GOOGLE_REDIRECT_URI,
    'response_type' => 'code',
    'scope' => 'openid profile email',
    'access_type' => 'offline',
    'prompt' => 'consent',
]);

 // Debug if redirect_uri is empty:
        if (empty($GOOGLE_REDIRECT_URI)) {
            dd('GOOGLE_REDIRECT_URI is empty. Please check your .env file and clear config cache.');
        }
        
return redirect("https://accounts.google.com/o/oauth2/v2/auth?$query");


       

        return redirect("https://accounts.google.com/o/oauth2/v2/auth?$query");
    }

    public function handleGoogleCallback(Request $request)
    {
        
        $session_id = Session::getId();
        

        if (!$request->has('code')) {
            return 'Authorization code not found in request.';
        }

        $response = Http::asForm()->post('https://oauth2.googleapis.com/token', [
            'client_id' => $GOOGLE_CLIENT_ID,
            'client_secret' => $GOOGLE_CLIENT_SECRET,
            'redirect_uri' => $GOOGLE_REDIRECT_URI,
            'grant_type' => 'authorization_code',
            'code' => $request->code,
        ]);

        $data = $response->json();
       
        if (isset($data['error'])) {
            return 'Error from Google Token API: ' . $data['error_description'];
        }

        $accessToken = $data['access_token'];

        $userInfoResponse = Http::withHeaders([
            'Authorization' => "Bearer $accessToken",
        ])->get('https://www.googleapis.com/oauth2/v3/userinfo');

        $googleUser = $userInfoResponse->json();
      
           if (!isset($googleUser['email'])) {
            return redirect()->route('login')->with('error', 'Unable to get email from Google.');
        }

        $user = User::where('email', $googleUser['email'])->first();
         if (!$user) {
            $user = User::create([
                'name' => $googleUser['name'] ?? $googleUser['email'],
                'email' => $googleUser['email'],
                'mobile' => null, 
                'user_image'=>$googleUser['picture'] ?? null,
                'role' => 2, 
                'password' => Hash::make(uniqid('google_')), 
            ]);
        }

        // Login user
        Auth::login($user);
         
        Cart::where('session_id', $session_id)->update(['user_id' => $user->id]);

        // Redirect based on role
        if ($user->role == 1) {
            return redirect()->route('admin.dashbord')->with('success', 'Welcome Admin!');
        } elseif ($user->role == 2) {
            $previousUrl = session()->get('previous_url', route('web.index'));
            return redirect()->to($previousUrl ? $previousUrl : route('web.index'))
                ->with('success', 'Welcome Customer!');
        } else {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Unauthorized role.');
        }
    }
}
