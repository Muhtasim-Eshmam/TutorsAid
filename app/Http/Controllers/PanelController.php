<?php

namespace App\Http\Controllers;

use App\panel;
use Illuminate\Http\Request;

class PanelController extends Controller
{
   
    public function index()
    {
        return view('panel.main');
    }

   
    public function create()
    {
        return view('panel.newmsg');
    }

    
    public function store(Request $request)
    {
        $newmsg= new panel();


        $newmsg->name = $request->name;
        $newmsg->title = $request->title;
        $newmsg->msg = $request->msg;
        // Mail::to($newmsg->email)->send(new WelcomeMail());
        $newmsg->save();
        return back();
    }

    
   
        public function studentmsgs(panel $newmsg)
    {   
        $newmsg=panel::all();
     
        return view('panel.adminmain',compact('newmsg'));
    }

    
    
}
