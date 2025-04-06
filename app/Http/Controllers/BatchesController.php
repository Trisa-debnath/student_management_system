<?php

namespace App\Http\Controllers;

use App\Models\batches;
use Illuminate\Http\Request;

class BatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = batches::all();

        return view('batches.index',compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required',
        'course_id'=>'required',
        'start_date'=>'required'
        
    ]);
    
    
   $batch = new batches();
   $batch->name = $request ->name;
   $batch->course_id = $request ->course_id;
   $batch->start_date = $request ->start_date;
   $batch->save();
   return redirect()->route('batches.index')->with('success',$batch->name." added Successfully.");
  
    }

    /**
     * Display the specified resource.
     */
    public function show(batches $batches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $batc = batches::find($id);
        return view('batches.edit', compact('batc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        batches::where('id',$id)->update
        ([
            'name'=> $request->name,
            'course_id'=> $request->course_id,
            'start_date'=> $request->start_date

        ]);
        return redirect()-> route('batches.index')->with('success','batch data update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $batche = batches::find($id);
        $batche->delete();

        return redirect()-> route('batches.index')->with('error','batches deleted successfully.');
    }
}





