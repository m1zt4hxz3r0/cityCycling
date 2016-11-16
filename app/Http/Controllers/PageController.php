<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    	return view('pages.home');
    }
    public function shop(){
    	return view('pages.shop');
    }
    public function productDetail(){
    	return view('pages.product-detail');

    }
}
