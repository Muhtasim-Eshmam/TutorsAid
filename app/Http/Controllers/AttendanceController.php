<?php

namespace App\Http\Controllers;

use App\attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view("attend.add");
    }

    

   
    public function store(Request $request)
    {
        $attend= new attendance();
        $attend->name = $request->name;
        $attend->subject = $request->subject;
        $attend->date = $request->date;
        $attend->month =  $request->month;
        
        // Mail::to($attend->email)->send(new WelcomeMail());

        $attend->save();
        return back();
    }


    public function show(attendance $attend)
    {
        // $attend=attend::all();
        $attend = attendance::orderBy('created_at','DESC')->get();
        return view('attend.attendview',compact('attend'));
    }


    // public function attendsearch(attendance $attendance)
    // {
    //     // $attendance=attendance::all();
    //     $attendance = attendance::orderBy('created_at','DESC')->get();
    //     return view('attend.search',compact('attendance'));
    // }

    public function search(Request $request,attendance $attend)
    {
        $output="";
        $attendance=attendance::where('name','Like','%'.$request->search.'%')->orWhere('month','Like','%'.$request->search.'%')->get();
          $i=0;
        foreach($attendance as $attend)
        {
            $i=$i+1;
            $output.='<tr><td>'. $i.'</td><td>' .$attend->name.'</td><td>'.$attend->date.'</td><td>'.$attend->month.'</td><td>' .$attend->subject.'</tr>';
        }
        return response($output);
    }






    public function edit(attendance $attendance)
    {
        
    }

    
    public function update(Request $request, attendance $attendance)
    {
       
    }

    
    public function destroy(attendance $attendance)
    {
       
    }
}
