<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function savebook(Request $request){
        

        $this->validate($request,[
            // 'book_title'=>'required',
            // 'book_author'=>'required',
            // 'description'=>'required',
            // 'cover_photo'=>'required',
            // 'book_file'=>'required',
         ]);

                    if($request->Has('cover_photo')){
                        //get file name extension

                        $fileNameWithExtPhoto=$request->file('cover_photo')->getClientOriginalName();
                            //get file name
                        $filename=pathinfo($fileNameWithExtPhoto,PATHINFO_FILENAME);
                            //get file extension
                        $extension=$request->file('cover_photo')->getClientOriginalExtension();
                            //file name to store
                        $coverImageToStore=$filename .'_'.time().'.'.$extension;

                        $path=$request->file('cover_photo')->storeAs('public/educ_photo',$coverImageToStore);


                    }else{
                        $coverImageToStore='noimage.jpg';
                    }
                    //handle the file upload
                    if($request->Has('book_file')){
                        //get file name extension
            
                        $fileNameWithExtFile=$request->file('book_file')->getClientOriginalName();
                            //get file name
                        $filename=pathinfo($fileNameWithExtFile,PATHINFO_FILENAME);
                            //get file extension
                        $extension=$request->file('book_file')->getClientOriginalExtension();
                            //file name to store
                        $fileNameToStore=$filename .'_'.time().'.'.$extension;
            
                        $path=$request->file('book_file')->storeAs('public/educ_file',$fileNameToStore);
                            

            
                    }
            
                    $book= new Book();
                  
                    $book->book_title=$request->input('book_title');
                    $book->book_author=$request->input('book_author');
                    $book->description=$request->input('description');
                    $book->book_file=$fileNameToStore;
                    $book->cover_photo= $coverImageToStore;
                    $book->save();


                    if ($book){
                        return redirect()->back()->with('message', 'Company added successfuly.');
            
                    }else{
                        return redirect()->back()->with('fail', 'Something is wrong');
            
                    }
    }
}
