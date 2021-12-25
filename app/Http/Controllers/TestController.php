<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function post()
    {
        return view('post');
    }

    public function contact()
    {
        return view('contact');
    }
}
