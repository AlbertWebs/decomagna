<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    public function index()
    {
        $Slider = DB::table('sliders')->orderBy('id','ASC')->get();
        return view('front.index', compact('Slider'));
    }

    public function portfolio()
    {
        $Portfolio = DB::table('portfolios')->get();
        return view('front.portfolio', compact('Portfolio'));
    }

    public function products()
    {
        $Products = DB::table('products')->get();
        return view('front.products', compact('Products'));
    }





}
