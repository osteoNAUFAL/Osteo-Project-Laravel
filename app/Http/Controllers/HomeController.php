<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); // merujuk ke halaman welcome.bleed.php
    }

    public function about (){
        $data = [
            'name'  => 'Osteo Naufal Al Badi',
            'address'  => 'Purbalingga',
            'email'  => 'osteonaufal@gmai.com'
        ];
        return view('about', $data);
    }

    public function login(){
        return view('login');
    }
}