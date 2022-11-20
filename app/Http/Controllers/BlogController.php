<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    
    public function saveblog(Request $request){

        $this->validate($request,[
            'blog_title'=>'required',
            'blog_category'=>'required',
            'descripton'=>'required' ,
            'cover_photo'=>'image|nullable'
            ]);

        if($request->Has('cover_photo')){


             $fienamewithExt=$request->file('cover_photo')->getClientOriginalName();
                 //get file name
             $filename=pathinfo($fienamewithExt,PATHINFO_FILENAME);
                 //get file extension
             $extension=$request->file('cover_photo')->getClientOriginalExtension();
                 //file name to store
             $fileNameToStore=$filename .'_'.time().'.'.$extension;
             $path=$request->file('cover_photo')->storeAs('public/blog_images',$fileNameToStore);
            
        }
        
        else{
            $fileNameToStore='noimage.jpg';
        }



        $post=new Blog();
        $post->title=$request->input('blog_title');
        $post->category=$request->input('blog_category');
        $post->description=$request->input('descripton');
        //  $post->user_id=auth()->user()->id;
        $post->cover_photo=$fileNameToStore;
        $post->save();

        if ($post){
            return redirect()->back()->with('message', 'Blog added successfuly.');

        }else{
            return redirect()->back()->with('fail', 'Something is wrong');

        }
    }
}
