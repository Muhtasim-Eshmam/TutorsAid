<?php

namespace App\Http\Controllers;


use App\assistance;
use Illuminate\Http\Request;

class AssistanceController extends Controller
{
  
    public function index()
    {
        return view('assistance.menu');
    }

    public function check()
    {
        return view('assistance.check');
    }

    public function create()
    {
        return view('assistance.add');
    }


    public function stumenu()
    {
        return view('assistance.stumenu');
    }

   
    public function store(Request $request)
    {
        $assistance= new assistance();
        $assistance->work = $request->work;
        $assistance->duedate = $request->duedate;
        $assistance->description = $request->description;
        $assistance->status =  $request->status;
        
        // Mail::to($assistance->status)->send(new Welcomstatus());

        $assistance->save();
        return back();

    }

   
    public function show(assistance $assistance)
    {
        $assistance = assistance::orderBy('status','ASC')->get();
        return view('assistance.show',compact('assistance'));
    }

   
    public function edit(assistance $assistance , $id)
    {
        $assistance=assistance::find($id);
        return view('assistance.update',compact('assistance'));
    }

    
    public function update(Request $request, assistance $assistance, $id)
    {
        $assistance=assistance::find($id);
        $assistance->work = $request->work;
        $assistance->duedate = $request->duedate;
        $assistance->description = $request->description;
        $assistance->status = $request->status;
   
        $assistance->save();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\assistance  $assistance
     * @return \Illuminate\Http\Response
     */
    public function destroy(assistance $assistance)
    {
        //
    }
}
