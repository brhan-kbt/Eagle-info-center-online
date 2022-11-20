<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    //

    public function managebooks(){
        return view('auth.books.index');
    } 
    
    public function managecompany(){
        return view('auth.company.index');
    } 
    
    public function manageblog(){
        return view('auth.blog.index');
    }

    public function manageevent(){
        return view('auth.event.index');
    }

    public function addcompany(){
        return view('auth.company.add');
    }

    public function checkpricing(Request $request){
        dd($request);
    }

    public function addblog(){
        return view('auth.blog.add');
    }

    public function addbook(){
        return view('auth.books.add');
    }


    public function savecompany(Request $request){
            
        $request->validate([
            // 'company_name' => 'required',
            // 'phone1' => 'required',
            // 'phone2' => 'required',
            // 'mobile1' => 'required',
            /* 'email' => 'required|email|unique:users',
            'phone1' => 'required | numeric | digits:10',
            'phone2' => 'required | numeric | digits:10',
            'phone3' => 'nullable | numeric | digits:10',
            'mobile1' => 'required | numeric | digits:10',
            'mobile2' => 'nullable | numeric | digits:10',
            'fax' => 'nullable | numeric | digits:10', */
            /* 'bussinesscategory' => 'required',
            'typeofcompany' => 'required',
            'city' => 'required',
            'sub_city' => 'required',
            'woreda' => 'required',
            'sefer' => 'required',
            'specific_location' => 'required',
            'mesmer' => 'required', */
 
         ]);

         if($request->Has('cover_photo')){
            //get file name extension

            $fienamewithExt=$request->file('cover_photo')->getClientOriginalName();
                //get file name
            $filename=pathinfo($fienamewithExt,PATHINFO_FILENAME);
                //get file extension
            $extension=$request->file('cover_photo')->getClientOriginalExtension();
                //file name to store
           $fileNameToStore=$filename .'_'.time().'.'.$extension;

            $path=$request->file('cover_photo')->storeAs('public/company_images',$fileNameToStore);


        }else{
            $fileNameToStore='noimage.jpg';

        }
 
         $data = new Company;
 
         $data->company_name = $request->company_name;
         $data->company_owner = $request->company_owner;
         $data->business_category = $request->businesscategory;
         $data->type_of_company	 = $request->typeofbusiness;
         $data->city = $request->city;
 
         $data->sub_city = $request->sub_city;
         $data->woreda = $request->woreda;
         $data->sefer = $request->sefer;
 
         $data->specific_location = $request->specific_location;
         $data->gmap = $request->gmap;
 
         $data->company_email = $request->company_email;
         $data->website = $request->website;
         $data->fax = $request->fax;
         $data->pobox = $request->pobox;
         $data->telephone = $request->telephone;
 
         $data->mobile = $request->mobile;
         $data->alt_mobile = $request->altmobile;
         $data->service = $request->service;
         $data->photo =  $fileNameToStore;
 
         $data->save();
 
         if ($data){
             return redirect()->back()->with('message', 'Company added successfuly.');
 
         }else{
             return redirect()->back()->with('fail', 'Something is wrong');
 
         }

    }
}
