<?php

namespace App\Http\Controllers;
use App\submission;
use App\assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('assignment.add');
    }

  


  
        public function store(Request $request)
        {
            $assignment= new assignment();
            $assignment->topic = $request->topic;
            $assignment->duedate = $request->duedate;
            $assignment->description = $request->description;
            $assignment->class =  $request->class;
            
            // Mail::to($assignment->status)->send(new Welcomstatus());
    
            $assignment->save();
            return back();
    
        }
    

   
        public function show(assignment $assignment)
        {
            $assignment = assignment::orderBy('class','ASC')->get();
            return view('assignment.show',compact('assignment'));
        }



        public function submissions(submission $submission)
        {
            $submission = submission::orderBy('created_at')->get();
            return view('assignment.submissions', compact('submission'));
        }



        public function menu()
        {
            return view('assignment.adminmenu');
        }


   
    public function edit(assignment $assignment , $id)
    {
        $assignment=assignment::find($id);
        return view('assignment.updateposted',compact('assignment'));
    }

    public function update(Request $request, assignment $assignment, $id)
    {
        $assignment=assignment::find($id);
            $assignment->topic = $request->topic;
            $assignment->duedate = $request->duedate;
            $assignment->description = $request->description;
            $assignment->class =  $request->class;
            
            // Mail::to($assignment->status)->send(new Welcomstatus());
    
            $assignment->save();
      
            return redirect('/assignmentshow');
    }











    public function destroy(assignment $assignment)
    {
        //
    }
}
