
@extends('layout')

@section('content')
    <div class="card">
        
        <div class="card-header">
        <h4 class="mb-3">view Enrollment information</h4>
        <a href="{{ route('enroll.index') }}" class="btn btn-primary mb-3">Back</a></div>

        <!-- Enrollment View -->
      
            @csrf
           
            <div class="card-body">
                <h1 class=" card-title">ID:{{$show->id}}</h1>
                <p class=" card-title">Enroll_No:{{$show->enroll_no}}</p>
                <p class=" card-text">Batches_ID:{{$show->batches_id}}</p>
                <p class=" card-text">Student_ID:{{$show->student_id}}</p>
                <p class=" card-text">Join_Date:{{$show->join_date}}</p>
                <p class=" card-text">Fee:{{$show->fee}}</p>     
            </div>


          
    </div>
@endsection