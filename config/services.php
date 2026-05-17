<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */
    'google' => [
        'client_id' => '591108301100-amfun8q9qi78ccl5sgp99ei4hfepgssi.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/authorized/google/callback',
    ],
  
    // 'google' => [
    //     'client_id' => '26731287316-bmtvpci81bgiek16chkod26v5cvb5o25.apps.googleusercontent.com',
    //     'client_secret' => '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',
    //     'redirect' => 'http://localhost:8000/authorized/google/callback',
    // ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],
//    'google' => [
//     'client_id' => env('GOOGLE_CLIENT_ID'),
//     'client_secret' => env('GOOGLE_CLIENT_SECRET'),
//     'redirect' => env('GOOGLE_REDIRECT_URI'),
// ],
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
