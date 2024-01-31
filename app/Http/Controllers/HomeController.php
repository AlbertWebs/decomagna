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


    public function categories_explore($slung)
    {
        $Categories = \App\Models\Category::where('slung',$slung)->get();
        foreach($Categories as $cat){
            $Products = DB::table('products')->where('category',$cat->id)->get();
            // dd(count($Products));
            $PageTitle = $cat->title;
            $CategoryTitle = "Quick-Step flooring Kenya - Decomagna ltd";
            $CategorySlung = "#";
            $catslung = $slung;
            $Categories = DB::table('categories')->where('slung',$slung)->get();
            return view('front.categories-bk', compact('Categories','CategorySlung','CategoryTitle','PageTitle','Products','catslung'));
        }

    }

    public function categories($slung)
    {
        $Categories = \App\Models\Category::where('slung',$slung)->get();
        foreach($Categories as $cat){
            $Products = DB::table('products')->where('category',$cat->id)->get();
            // dd(count($Products));
            $PageTitle = $cat->title;
            $CategoryTitle = "Quick-Step flooring Kenya - Decomagna ltd";
            $CategorySlung = "#";
            $catslung = $slung;
            $Categories = DB::table('categories')->where('slung',$slung)->get();
            return view('front.categories', compact('Categories','CategorySlung','CategoryTitle','PageTitle','Products','catslung'));
        }

    }

    public function product($slung)
    {
        $Products = DB::table('products')->where('slung',$slung)->get();
        return view('front.product', compact('Products'));
    }




    public function faq($slung)
    {
        $Faq = DB::table('faq')->where('slung',$slung)->get();
        return view('front.faq', compact('Faq'));
    }

    public function folio($slung)
    {
        $Folio = DB::table('portfolios')->where('slung',$slung)->get();
        return view('front.folio', compact('Folio'));
    }



    public function terms()
    {
        $Terms = DB::table('terms')->get();
        return view('front.terms', compact('Terms'));
    }

    public function copyright()
    {
        $Terms = DB::table('copyright')->get();
        return view('front.copyright', compact('Terms'));
    }

    public function privacy()
    {
        $Terms = DB::table('privacies')->get();
        return view('front.privacy', compact('Terms'));
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

    public function contact()
    {
        $Slider = DB::table('sliders')->orderBy('id','ASC')->get();
        return view('front.contact', compact('Slider'));
    }








}
