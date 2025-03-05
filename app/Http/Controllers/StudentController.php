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
       //$stud=student::all();
        return view('students.create');
        //,compact('stud')
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
    //return redirect()->back()->with("registation success");


    return redirect()->route('student.index')->with('success');
    




    
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        $show=student::all();
        return view('students.show',compact('show'));
        
       //return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = student::find ($id);
            
            return view('students.edit',compact('student'));
    




    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        student::where('id', $id)->update([
            'name'=> $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'dob' => $request->dob
        ]);
     
 return redirect()-> route('student.show')->with('success','student update successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = student::find ($id);
        $student -> delete();


        return redirect()-> route('student.show')->with('error','student Deleted successfully.');

    


    }
}
