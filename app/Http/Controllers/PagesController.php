<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
            return view('pages.home');
    }

    public function about(){
        return view('pages.about');
        
    }

    public function blog(){
        return view('pages.blog');
        
    }

    public function contact(){
        return view('pages.contact');
        
    }

    public function listing(){
        return view('pages.listing');
        
    }
    public function listingdetail(){
        return view('pages.listing-detail');
    }

    public function blogdetail(){
        return view('pages.blog-details');
    }
    public function listinggrid(){
        return view('pages.listing-grid');
    }
}


