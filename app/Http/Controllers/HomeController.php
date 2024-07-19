<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontpages.index');
    }

    public function about()
    {
        return view('frontpages.about');
    }

    public function news()
    {
        return view('frontpages.news');
    }

    public function contact()
    {
        return view('frontpages.contact');
    }

    public function shop()
    {
        return view('frontpages.shop');
    }

    public function page404()
    {
        return view('frontpages.404');
    }

    public function cart()
    {
        return view('frontpages.cart');
    }
    public function checkout()
    {
        return view('frontpages.checkout');
    }

}