<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function addevent(){
        return view('auth.event.add');
    }

    public function saveevent(Request $request){

        $this->validate($request,[
            // 'event_title'=>'required',
            // 'event_category'=>'required',
            // 'descripton'=>'required' ,
            // 'cover_photo'=>'image|nullable'
            ]);

        if($request->Has('cover_photo')){


             $fienamewithExt=$request->file('cover_photo')->getClientOriginalName();
                 //get file name
             $filename=pathinfo($fienamewithExt,PATHINFO_FILENAME);
                 //get file extension
             $extension=$request->file('cover_photo')->getClientOriginalExtension();
                 //file name to store
             $fileNameToStore=$filename .'_'.time().'.'.$extension;
             $path=$request->file('cover_photo')->storeAs('public/event_images',$fileNameToStore);
            
        }
        
        else{
            $fileNameToStore='noimage.jpg';

        }



        $post=new Event();
        $post->title=$request->input('event_title');
        $post->category=$request->input('event_category');
        $post->description=$request->input('description');
        //  $post->user_id=auth()->user()->id;
        $post->cover_photo=$fileNameToStore;
        $post->save();

        if ($post){
            return redirect()->back()->with('message', 'Event added successfuly.');

        }else{
            return redirect()->back()->with('fail', 'Something is wrong');

        }
    
    }
}

