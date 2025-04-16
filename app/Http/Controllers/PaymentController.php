<?php

namespace App\Http\Controllers;

use App\Models\enrollmant;
use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payment = payment::all();

        return view('payments.index',compact('payment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrollments = enrollmant::pluck('enroll_no','id');
        return view('payments.create',compact('enrollments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['enrollmant_id'=>'required',
        'paid_date'=>'required',
        'amount'=>'required'
        
    ]);
    
    
   $pay = new payment();
   $pay->enrollmant_id = $request ->enrollmant_id;
   $pay->paid_date = $request ->paid_date;
   $pay->amount = $request ->amount;
   $pay->save();
   return redirect()->route('payment.index')->with('success',$pay->name." added Successfully.");
  
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $show=payment::findOrFail($id);
        return view('payments.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $payment = payment::find($id);
        $enrollments = enrollmant::pluck('enroll_no','id');
        return view('payments.edit', compact('payment','enrollments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        payment::where('id',$id)->update
        ([
            'enrollmant_id'=> $request->enrollmant_id,
            'paid_date'=> $request->paid_date,
            'amount'=> $request->amount

        ]);
        return redirect()-> route('payment.index')->with('success','payment data update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $payment = payment::find($id);
        $payment->delete();

        return redirect()-> route('payment.index')->with('error','payment one data deleted successfully.');
    }
}
