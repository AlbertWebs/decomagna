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
        $CategoryTitle = "Quick-Step flooring Kenya - Decomagna ltd";
        $CategorySlung = "#";
        $PageTitle = "Our Products";
        return view('front.products', compact('Products','CategoryTitle','CategorySlung','PageTitle'));
    }

    public function product($slung)
    {
        $Products = DB::table('products')->where('slung',$slung)->get();
        return view('front.product', compact('Products'));
    }


    public function categories($slung)
    {
        $Categories = DB::table('categories')->where('slung',$slung)->get();
        return view('front.categories', compact('Categories'));
    }

    public function thickness($category,$slung)
    {
        $Category = DB::table('categories')->where('slung',$category)->get();
        foreach($Category as $category){
            $Products = DB::table('products')->where('thickness',$slung)->get();
            $CategoryTitle = $category->title;
            $CategorySlung = $category->slung;
            $PageTitle = "$slung $CategoryTitle";
            return view('front.products', compact('Products','CategoryTitle','CategorySlung','PageTitle'));
        }
    }

    public function color($category,$slung)
    {
        $Category = DB::table('categories')->where('slung',$category)->get();
        foreach($Category as $category){
            $Products = DB::table('products')->where('color',$slung)->get();
            $CategoryTitle = $category->title;
            $CategorySlung = $category->slung;
            $PageTitle = "$slung $CategoryTitle";
            return view('front.products', compact('Products','CategoryTitle','CategorySlung','PageTitle'));
        }
    }

    public function species($category,$slung)
    {
        $Category = DB::table('categories')->where('slung',$category)->get();
        foreach($Category as $category){
            $Products = DB::table('products')->where('species',$slung)->get();
            $CategoryTitle = $category->title;
            $CategorySlung = $category->slung;
            $PageTitle = "$slung $CategoryTitle";
            return view('front.products', compact('Products','CategoryTitle','CategorySlung','PageTitle'));
        }
    }



    public function ac($category,$slung)
    {
        $Category = DB::table('categories')->where('slung',$category)->get();
        $AC = DB::table('a_c_ratings')->where('slung',$slung)->get();
        foreach($AC as $ac){
            foreach($Category as $category){
                $Products = DB::table('products')->where('a_c_ratings',$slung)->get();
                $CategoryTitle = $category->title;
                $CategorySlung = $category->slung;
                $PageTitle = "$ac->title";
                return view('front.products', compact('Products','CategoryTitle','CategorySlung','PageTitle'));
            }
        }

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
