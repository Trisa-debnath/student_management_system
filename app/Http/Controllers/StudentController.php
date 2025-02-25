<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $students=student::all();
        return view('students.index',compact('students'));
    


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
        'email'=>'required',
        'phone'=>'required',
        'address'=>'required',
        'dob'=>'required'
    ]);
    $stu= new student();
    $stu-> name = $request ->name;
    $stu-> email = $request ->email;
    $stu-> phone = $request ->phone;
    $stu-> address = $request ->address;
    $stu-> dob = $request ->dob;

    $stu-> save();
    return redirect()->back()->with("registation success");
    




    
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        
            
            return view('students.edit');
    




    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }
}
