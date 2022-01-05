<?php

namespace App\Http\Controllers;

use App\notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("notice.menu");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("notice.add");
    }

   
    public function store(Request $request)
    {
        $notice= new notice();
        $notice->title = $request->title;
    
        $notice->subject = $request->subject;
        $notice->type =  $request->type;
      
        
        // Mail::to($notice->email)->send(new WelcomeMail());

        $notice->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(notice $notice)
    {
        $notice = notice::orderBy('created_at','DESC')->get();
        return view('notice.one.noticeview',compact('notice'));
    }

}
