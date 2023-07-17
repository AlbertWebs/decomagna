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

    public function categories()
    {
        $Products = DB::table('products')->get();
        return view('front.categories', compact('Products'));
    }


    public function blog()
    {
        $Blog = DB::table('blogs')->get();
        return view('front.blog', compact('Blog'));
    }

    public function blog_single($slung)
    {
        $Blog = DB::table('blogs')->where('slung',$slung)->get();
        return view('front.blog_single', compact('Blog'));
    }





}
