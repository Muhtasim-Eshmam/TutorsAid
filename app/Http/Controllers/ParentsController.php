<?php

namespace App\Http\Controllers;
use App\Mail\parents;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function create()
    {
        return view('emails.parents');
    }



    public function send()
    {
        Mail::to(request('email'))->send(new parents());
       return redirect()->back();

    }




    

    public function test()
    {
        return view('test');
    }



}
