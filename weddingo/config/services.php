<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '1808301226091392',
        'client_secret' => '3cc96df5a4652cebfac450c7d67f7926',
        'redirect' => 'http://localhost/laravel-weddingo/weddingo/public/callback/facebook',
    ],

    'google' => [
        'client_id' => '490471594116-ivkmvb6u36enr7rlrirucp47mfn9v1e9.apps.googleusercontent.com',
        'client_secret' => 'rdigN1W4AGPH5te0zVqXOjsg',
        'redirect' => 'http://localhost/laravel-weddingo/weddingo/public/callback/google',
    ],
];
