<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $request->validate(['name'=>'required',
            'type'=>'required'
            
        ]);
        
       $Sub = new subject();
       $Sub->name = $request ->name;
       $Sub->type = $request ->type;
       $Sub->save();
       return redirect()->route('subject.create')->with('success',$Sub->name." added Successfully.");
      

    }

   

    /**
     * Display the specified resource.
     */
    public function show()
    {
         $subj=subject::all();

        return view('subjects.list',compact('subj'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subject = subject::find($id);
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
       subject::where('id',$id)->update([
           'name'=> $request->name,
           'type'=> $request->type,
           
        ]);
        return redirect()-> route('subject.show')->with('success','subject update successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subject = subject::find($id);
        $subject->delete();

        return redirect()-> route('subject.show')->with('error','subject deleted successfully.');

    }
}
