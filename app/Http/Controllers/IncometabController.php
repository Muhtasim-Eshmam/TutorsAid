<?php

namespace App\Http\Controllers;
use App\incometab;
use Illuminate\Http\Request;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class IncometabController extends Controller
{
    
    // public function index()
    // {
    //     return view('incometab.incometab');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $month = Carbon::now( 'GMT+6' )->format('M-Y');
     
        // $year=Carbon::now()->year;
       return view('incometab.incometab', compact('month'));
    }

    
    public function store(Request $request )
    {
        $month=Carbon::now( 'GMT+6' )->toDateString();
        $income= new incometab();


        $income->name = $request->name;
        $income->month = $request->month;
        $income->amount = $request->amount;
        $income->email =  $request->email;
        $income->status =  $request->status;
       
       
        Mail::to($income->email)->send(new WelcomeMail());


        $income->save();
        return back();
    }

    
    public function show(incometab $incometab)
    {   
            $income=incometab::all();

            $carbon = Carbon::now( 'GMT+6' )->toDateString();
            $month=Carbon::now()->month;


            $sum = incometab::sum('amount');
            $plus=incometab::where('status','paid')->count();
            $adv=incometab::where('status','advpaid')->count();
            // $total = $income->count('amount');

            return view('incometab\show2',compact('income','sum','adv','plus','month'));
    
    }


    public function searchsalary(Request $request,incometab $incometab)
    {

    $incometab = incometab::query()
 
    
    ->where('name', 'LIKE', "%{$request->string}%")
    ->orWhere('month', 'LIKE', "%{$request->string}%")

    ->paginate(20);


    return view('incometab.incomesearch', compact('incometab'));
    }
    



  
    public function edit(incometab $income , $id)
    {
        $income=incometab::find($id);
        return view('incometab.update',compact('income'));
    }
  
    public function update(Request $request, incometab $income, $id)
    {
        $income=incometab::find($id);
    
        $income->name = $request->name;
        $income->month = $request->month;
        $income->amount = $request->amount;
        $income->email =  $request->email;
        $income->status =  $request->status;
   
        $income->save();
        return back();

    }

   
    public function destroy(incometab $incometab)
    {
        //
    }
}
