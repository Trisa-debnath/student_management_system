<?php

namespace App\Http\Controllers;

use App\Models\enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enroll = enrollment::all();

        return view('enrollments.index',compact('enroll'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['enroll_no'=>'required',
        'batches_id'=>'required',
        'student_id'=>'required',
        'join_date'=>'required',
        'fee'=>'required'
        
        
    ]);
    
    
   $enro = new enrollment();
   $enro->enroll_no = $request ->enroll_no;
   $enro->batches_id = $request ->batches_id;
   $enro->student_id = $request ->student_id;
   $enro->join_date = $request ->join_date;
   $enro->fee = $request ->fee;
   $enro->save();
   return redirect()->route('enroll.index')->with('success',$enro->name." added Successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $show=enrollment::findOrFail($id);
        return view('enrollments.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $enr = enrollment::find($id);
        return view('enrollments.edit', compact('enr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        enrollment::where('id',$id)->update
        ([
            'enroll_no'=> $request->enroll_no,
            'batches_id'=> $request->batches_id,
            'student_id'=> $request->student_id,

            'join_date'=> $request->join_date,
            'fee'=> $request->fee

        ]);
        return redirect()-> route('enroll.index')->with('success','enrollment data update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $batche = enrollment::find($id);
        $batche->delete();

        return redirect()-> route('enroll.index')->with('error','enrollmented deleted successfully.');
    }
}
