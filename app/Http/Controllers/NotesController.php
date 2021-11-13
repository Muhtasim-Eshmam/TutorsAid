<?php

namespace App\Http\Controllers;

use App\notes;
use Illuminate\Http\Request;
use App\User;
use Image;
use Illuminate\Support\Facades\File;


class NotesController extends Controller
{
    
    public function index(notes $notes)
    {
        $notes = notes::orderBy('classno')->get();
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

  
    public function store(Request $request,notes $notes)
    {
        

        $notes = new notes();
        $notes->classno = $request->classno;
        $notes->topic = $request->topic;
        $notes->subject = $request->subject;
    // $image=$request->File('image');
        // $name=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

        
        
        //    Image::make($image)->save('storage/'.$name);


        if($request->hasFile('image'))
        {
            $path = $request->file('image')->store('CourseImage');
            $notes->image_path = 'storage/'.$path;
        }
         
        $notes->save();

        return redirect()->route('notes.index', $notes);
       
      

        
    }
    

    public function show(notes $notes)
    {
      
    }

   
    public function edit(notes $notes)
    {
    
    }

    
    public function update(Request $request, notes $notes)
    {
       

       
    }
    

  
   
}
