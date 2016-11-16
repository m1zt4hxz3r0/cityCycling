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
    public function productCategory(){
    	return view('pages.product-by-category');
    }
    public function cart(){
    	return view('pages.cart');
    }
    public function about(){
    	return view('pages.about');
    }
    public function contact(){
    	return view('pages.contact-us');
    }
    public function adminPanel(){
        return view('master.admin-page-master');/
    }
}
