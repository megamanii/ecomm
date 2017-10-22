<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $boots=Product::all();
        return view('home_body',compact('boots'));
    }

    public function boots()
    {
        $boots=Product::all();
        return view('boots',compact('boots'));
    }

    public function product()
    {
        return view('product');
    }
}