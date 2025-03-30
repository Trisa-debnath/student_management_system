<?php

namespace App\Http\Controllers;

use App\Models\teacherr;
use Illuminate\Http\Request;

class TeacherrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teach = teacherr::all();

        return view('teachers.index',compact('teach'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required',
        'address'=>'required',
        'phone'=>'required',
        'department'=>'required',
        'subject'=>'required'
        
    ]);
    
    
   $tea = new teacherr();
   $tea->name = $request ->name;
   $tea->address = $request ->address;
   $tea->phone = $request ->phone;
   $tea->department = $request ->department;
   $tea->subject = $request ->subject;
   $tea->save();
   return redirect()->route('teacher.index')->with('success',$tea->name." added Successfully.");
  
    }

    /**
     * Display the specified resource.
     */
    public function show(teacherr $teacherr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $teacher = teacherr::find($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        teacherr::where('id',$id)->update
        ([
            'name'=> $request->name,
            'address'=> $request->address,
            'phone'=> $request->phone,
            'department'=> $request->department,
            'subject'=> $request->subject
        ]);
        return redirect()-> route('teacher.index')->with('success','teacher data update successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $teacher = teacherr::find($id);
        $teacher->delete();

        return redirect()-> route('teacher.index')->with('error','Teacher deleted successfully.');

    }
}
