<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome'); // merujuk ke halaman welcome.bleed.php
});

Route::get('/', function () {
    return view('index'); // merujuk ke halaman welcome.bleed.php
});

Route::get('/login', function () {
    return view('index'); // merujuk ke halaman welcome.bleed.php
});