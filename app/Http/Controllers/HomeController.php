<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard() {
        return view('Dashboard');
    }
    public function login() {
        return view('login');
    }
    public function register() {
        return view('register');
    }
  
}
