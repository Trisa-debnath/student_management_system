<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = course::all();

        return view('courses.index',compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name'=>'required',
        'syllabus'=>'required',
        'duration'=>'required'
        
    ]);
    
    
   $cour= new course();
   $cour->name = $request ->name;
   $cour->syllabus = $request ->syllabus;
   $cour->duration = $request ->duration;
   $cour->save();
   return redirect()->route('course.index')->with('success',$cour->name." added Successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cou = course::find($id);
        return view('courses.edit', compact('cou'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        course::where('id',$id)->update
        ([
            'name'=> $request->name,
            'syllabus'=> $request->syllabus,
            'duration'=> $request->duration
            
            
        ]);
        return redirect()-> route('course.index')->with('success','courses data update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cours = course::find($id);
        $cours->delete();

        return redirect()-> route('course.index')->with('error','course deleted successfully.');
    }
}
