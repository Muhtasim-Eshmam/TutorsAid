<?php

namespace App\Http\Controllers;

use App\User;
use App\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('adminlogin');
    }

    public function main()
    {
       
        return view('admin');
    }


     public function panel()
    {
       
        return view('panel.adminmain');
    }



    public function adminchck (Request $request)
    { 
        $key = $request->input('key');
        $loc = $request->input('loc');
        // dd($request->input('key'));
        $viewFilePath='';
        if($key=='add' && $loc=='222' || $key=='reset' && $loc=='reset' ) 
        {      
         $viewFilePath='admin';    
        }
        else
        {       
        $viewFilePath='adminlogin';
        }
        
        // Toastr::success('Successful', 'Admin', ["positionname" => "toast-top-right"]);
         return view($viewFilePath);
    
       
    }


    public function checkregstudent()
    {
        
        // $now = Carbon::now();
        // echo $now->year;
        // echo $now->month;
        // echo $now->weekOfYear;



        $carbon = Carbon::now( 'GMT+6' )->toDateString();
$month=Carbon::now()->month;
        // Carbon::today()->toDateString();
        $User=User::all();
        return view('regstudents.regstudents',compact('User','carbon','month'));
    
    }

   
    public function create()
    {
       
    }

    
    public function store(Request $request)
    {
       
    }

   
    public function show(Admin $admin)
    {
        
    }

   
    public function edit(User $User,$id)
    {
        $User=User::find($id);
        return view('regstudents.block',compact('User'));
    }

   
    public function update(Request $request, User $User,$id)
    {
        $User=User::find($id);
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = $request->password;
      
        $User->save();
        return back();
    }

   
    public function destroy(User $User,$id)
    {
        $User=User::find($id);
        $User->delete();
        return back();
    }

}
