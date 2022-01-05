<?php

namespace App\Http\Controllers;

use App\submission;
use App\assignment;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\File;
use Carbon\Carbon;

class SubmissionController extends Controller
{
    public function submithere ()
    {
         return view('assignment.submitform');
    }


    public function store(Request $request,submission $submission)
    {
        $submission= new submission();
        $submission->class = $request->class;
        $submission->topic = $request->topic;
        $submission->name = $request->name;
        $submission->description = $request->description;
        $submission->email =  $request->email;
        if($request->hasFile('image'))
        {
            $path = $request->file('image')->store('QuizAnswers');
            $submission->image_path = 'storage/'.$path;
        }
         
 

        $submission->save();
        return back();
    }



    public function showassign (assignment $assignment)
    {

        $month = Carbon::now( 'GMT+6' )->format('d-m-Y');
        
         $assignment=assignment::all();
         return view('assignment.viewassigns',compact('assignment','month'));
    }
    
    public function show(submission $submission)
    {
        
    }

}