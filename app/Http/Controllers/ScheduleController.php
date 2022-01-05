<?php

namespace App\Http\Controllers;

use App\schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
  
    public function index()
    {
        return view('schedule.menu');
    }

  
    public function create()
    {
        return view('schedule.add');
    }

   
    public function store(Request $request)
    {
        $schedule= new schedule();
        $schedule->subject = $request->subject;
        $schedule->date = $request->date;
        $schedule->time = $request->time;
        $schedule->bookname = $request->bookname;
        $schedule->price =  $request->price;
        $schedule->store =  $request->store;
        
        // Mail::to($schedule->email)->send(new WelcomeMail());

        $schedule->save();
        return back();
    }

   
    public function show(schedule $schedule)
    {
        $schedule=schedule::all();
        return view('schedule\show',compact('schedule'));
    }

    
    public function edit(schedule $schedule , $id)
    {
        $schedule=schedule::find($id);
        return view('schedule.update',compact('schedule'));
    }

    
    public function update(Request $request, schedule $schedule, $id)
    {
        $schedule=schedule::find($id);
        $schedule->subject = $request->subject;
        $schedule->date = $request->date;
        $schedule->time = $request->time;
        $schedule->bookname = $request->bookname;
        $schedule->price =  $request->price;
        $schedule->store =  $request->store;
        $schedule->save();
        return back();

    }

  
   
}
