<?php

namespace App\Http\Controllers;

use App\studapply;
use Illuminate\Http\Request;

class StudapplyController extends Controller
{
    
    public function stuapply()                    //assistnce
    {
        return view('student.applyhere.stuapply');
    }




    public function appstore(Request $request)
    {
        $studapply= new studapply();
        $studapply->taskid = $request->taskid;
        $studapply->name = $request->name;
        $studapply->education =  $request->education;
        $studapply->grade =  $request->grade;

        $studapply->save();
        return back();
    }


    public function show(studapply $studapply)
    {
        $studapply = studapply::all();
        return view('student.applyhere.appview',compact('studapply'));
    }

    public function edit(studapply $studapply , $id)
    {
        $studapply=studapply::find($id);
        return view('student.applyhere.appupdate',compact('studapply'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\assistance  $assistance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studapply $studapply, $id)
    {
        $studapply=studapply::find($id);
        $studapply->taskid = $request->taskid;
        $studapply->name = $request->name;
        $studapply->education = $request->education;
        $studapply->grade = $request->grade;
   
        $studapply->save();
        return back();
    }

   
     
    public function destroy(studapply $studapply,$id)
    {
        $studapply=studapply::find($id);
        $studapply->delete();
        return back();
    }

}
