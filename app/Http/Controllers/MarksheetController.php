<?php

namespace App\Http\Controllers;

use App\marksheet;
use Illuminate\Http\Request;

class MarksheetController extends Controller
{
    
    public function index()
    {
        return view("marksheet.menu");
    }

    
    public function create()
    {
        return view("marksheet.add");
    }

   
    public function store(Request $request)
    {
        $marksheet= new marksheet();
        $marksheet->name = $request->name;
        $marksheet->mock1 = $request->mock1;
        $marksheet->mock2 = $request->mock2;
        $marksheet->mock3 = $request->mock3;
        $marksheet->email =  $request->email;
        
        // Mail::to($marksheet->email)->send(new WelcomeMail());

        $marksheet->save();
        return back();
    }


    
    public function show(marksheet $marksheet)
    {
        // $marksheet=marksheet::all();
        $marksheet = marksheet::orderBy('name','DESC')->get();
        return view('marksheet\markshow2',compact('marksheet'));
    }

    public function search(Request $request,marksheet $marksheet)
    {

    $marksheet = $marksheet::orderBy('name','ASC')
    ->where('name', 'LIKE', "%{$request->string}%")->get();
    return view('marksheet.search', compact('marksheet'));
    }



    
    public function edit(marksheet $marksheet,$id)
    {
        $marksheet=marksheet::find($id);
        return view('marksheet.update',compact('marksheet'));
    }

    
    public function update(Request $request, marksheet $marksheet,$id)
    {
        $marksheet=marksheet::find($id);
        $marksheet->name = $request->name;
        $marksheet->mock1 = $request->mock1;
        $marksheet->mock2 = $request->mock2;
        $marksheet->mock3 = $request->mock3;
        $marksheet->email =  $request->email;
        $marksheet->save();
        return back();
    }

    
    public function destroy(marksheet $marksheet)
    {
        //
    }


  









}

