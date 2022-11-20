<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Imports\CompanyImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
class PagesController extends Controller
{
    //
    public function home(){
            return view('pages.home');
    }
    public function dash(){
      
        return view('pages.dashboard');
}

public function payment(){
    return view('pages.payment');
}

    public function signin(Request $request){
       
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dash');

        }
 
        return back()->withErrors([
            'xemail' => 'The provided credentials do not match our recordddds.',
        ]);

    }


    public function pricing(){
        $pricing=array(
            '0'=>0,
            '1'=>1,
            '2'=>2
        );
        return view('pages.pricing')->with('pricing', $pricing);
    }

    public function adminDashboard(){
        return view('auth.admin-dashboard');
    }

    public function addinfo($id){
        return view('pages.information')->with('index',$id);
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

    
    public function ethiopia(){
        return view('pages.ethiopia');
    }
    public function event(){
        return view('pages.event');
    }
}


