<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;


class UserAccountController extends Controller
{

    public function signup(Request $request)
    {


             $this->validate($request, [
               'name'=>'required',
               'email'=>'required',
               'password'=>'required|min:6|max:12',
            //    'profileImg'=>'required',
                ]);

                // dd($request);

                if($request->Has('profileImg')){
                    //get file name extension
       
                    $fienamewithExt=$request->file('profileImg')->getClientOriginalName();
                        //get file name
                    $filename=pathinfo($fienamewithExt,PATHINFO_FILENAME);
                        //get file extension
                    $extension=$request->file('profileImg')->getClientOriginalExtension();
                        //file name to store
                   $fileNameToStore=$filename .'_'.time().'.'.$extension;
       
                    $path=$request->file('profileImg')->storeAs('public/images',$fileNameToStore);
       
       
                }else{
                    $fileNameToStore='noimage.jpg';

                }


       $user=new User();
       $pass=$request->input('password');
       $password=Hash::make($pass);

       $user->name=$request->input('name');
       $user->email=$request->input('email');
       $user->profileImg=$request->input('profileImg');
       $user->password=$password;
       $user->roll='user';
       $user->status='1';
       $user->save();

       event(new Registered($user));


       

        if(Auth::user()->roll=='user'){
        Auth::login($user);

            return redirect('/dash')->with('success',"Registered Successfully!");
        }


    }


    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->put('loginId', $user->id);                    

                 return redirect()->route('/dash');
        }
 
        return back()->withErrors([
            'username' => 'The provided credentials do not match our reddddddcords.',
        ]);
    }

    public function manageuser(){

        $users=User::all();
        return view('auth.user.index')->with('users', $users);
    }

    public function adduser(){

        return view('auth.user.add');
    }
}
