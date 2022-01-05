<?php

namespace App\Http\Controllers;
use App\schedule;
use App\student;
use App\assistance;
use App\attendance;
use App\studapply;
use App\marksheet;
use App\assignment;
use App\notice;
use App\panel;
use App\notes;
use App\Admin;



use App\incometab;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function live(schedule $schedule)
    {
       
             $schedule=schedule::all();
        return view('welcome2',compact('schedule'));
    }

    public function assistmenu()
    {
       
          
        return view('Student.applyhere.assistmenu');
    }



    public function index()
    {
        $schedule=schedule::all();
        return view('Student.student',compact('schedule'));
    }


    public function schedule (schedule $schedule)
    {
         $schedule=schedule::all();
         return view('Student.scheduleview',compact('schedule'));
    }



    public function welcome()
    {
        return view('welcome2');
    }



    public function seemore (schedule $schedule)             //schedule
    {
         $schedule=schedule::all();
         return view('Student.scheduleview',compact('schedule'));
    }



    // public function valid (Request $request)                       //assistnce
    // { 
     
    //     $loc = $request->input('loc');
    //     // dd($request->input('key'));
    //     $viewFilePath='';
    //     if( $loc=='222' || $loc=='reset' ) 
    //     {      
    //      $viewFilePath='Student.assistmenu';    
    //     }
    //     else
    //     {       
    //     $viewFilePath='check';
    //     }
        
    //     // Toastr::success('Successful', 'Admin', ["positionname" => "toast-top-right"]);
    //      return view($viewFilePath);
    
       
    // }


    public function stushow(assistance $assistance, Request $request)                    //assistnce
    {   $assistance = assistance::all();
        return view('student.applyhere.stushow',compact('assistance'));
    }

  


    public function marksview(marksheet $marksheet, Request $request)                    //marksheet
    { 
        $sum1 = $marksheet->avg('mock1');
        $sum2 = $marksheet->avg('mock2');
        $sum3 = $marksheet->avg('mock3');

        $marksheet = marksheet::all();
        return view('student.one.viewmarks',compact('marksheet','sum1','sum2','sum3'));
      
    }
  

    public function attendance(attendance $attendance, Request $request)                    //attendance
    {    
        $attendance = attendance::all();
        return view('student.one.viewattend',compact('attendance'));  
    }



    public function payment(incometab $income, Request $request)                    //attendance
    {    
        $income = incometab::all();
        return view('student.one.viewpayment',compact('income'));  
    }


    public function notice(notice $notice)
    {
        $notice = notice::orderBy('created_at','DESC')->get();
        return view('Student.noticesearch',compact('notice'));
    }



    public function search(Request $request,notice $notice)
    {
        $output="";
        $notice=notice::where('type','Like','%'.$request->search.'%')->orWhere('title','Like','%'.$request->search.'%')->orWhere('created_at','Like','%'.$request->search.'%')->get();
          $i=0;
        foreach($notice as $notice)
        {
            $i=$i+1;
            $output.='<tr><td>'. $i.'</td><td>' .$notice->title.'</td><td>'.date_format($notice->created_at,'D M Y').'</td><td>'.$notice->subject.'</td><td>' .$notice->type.'</tr>';
        }
        return response($output);
    }





    public function show(panel $newmsg)
    {   
        $newmsg=panel::where('title','public')->get();
     
        return view('panel.main',compact('newmsg'));
    }

    public function mymsgs(panel $newmsg)
    {   
        $newmsg=panel::all();
        return view('panel.mymsgs',compact('newmsg'));
    
    }

    public function editmsg(panel $newmsg , $id)
    {
        $newmsg=panel::find($id);
        return view('panel.updatemsgs',compact('newmsg'));
    }


    public function updatemsg(Request $request, panel $newmsg, $id)
    {
        $newmsg=panel::find($id);
        $newmsg->msg = $request->msg;
        $newmsg->name = $request->name;
        $newmsg->title = $request->title;
        $newmsg->save();
        return back();
    }

   
     
    public function destroymsg(panel $newmsg,$id)
    {
        $newmsg=panel::find($id);
        $newmsg->delete();
        return back();
    }


    public function viewnotes(notes $notes)
    {
        $notes = notes::orderBy('classno')->get();
        return view('student.one.viewnotes', compact('notes'));
    }


   

    public function validatechck(Request $request,schedule $schedule)
    { 
      
        $loc = $request->input('loc');
        // dd($request->input('key'));
        $viewFilePath='';
        if( $loc=='222' ) 
        {      
         $viewFilePath='Student.student';    
        }
        else
        {       
        $viewFilePath='home';
        }
        
        // Toastr::success('Successful', 'Admin', ["positionname" => "toast-top-right"]);
         return view($viewFilePath);

    }
    
}
