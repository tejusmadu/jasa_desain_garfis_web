<?php

return [

   // config/auth.php

'guards' => [
    'user' => [
        'driver' => 'session',
        'provider' => 'users',
    ],

    'admin' => [
        'driver' => 'session',
        'provider' => 'admins', // Sesuaikan dengan provider yang digunakan untuk admin
    ],
],

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],

    'admins' => [
        'driver' => 'eloquent',
        'model' => App\Models\admin::class, // Sesuaikan dengan model admin yang digunakan
    ],
],



'messages' => [
    'messages' => [
        'driver' => 'session',
        'provider' => 'customers', // Sesuaikan dengan provider yang Anda gunakan
    ],
    // ...
],




];

