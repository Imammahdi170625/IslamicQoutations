<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $name = "arif";
        return view('test', ['testName' => $name]);
    }
}
