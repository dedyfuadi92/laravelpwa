<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pwacontroller extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
}
