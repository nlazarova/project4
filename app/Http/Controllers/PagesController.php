<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return view('index');
    }
    
    public function users() {
        return view('users');
    }
    
    public function cities() {
        return view('cities');
    }
    
    public function routes() {
        return view('routes');
    }
    
    public function stations() {
        return view('stations');
    }
}
