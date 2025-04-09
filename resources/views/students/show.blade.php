
@extends('layout')

@section('content')
    <div class="card">
        
        <div class="card-header">
        <h4 class="mb-3">view Student's information</h4>
        <a href="{{ route('student.index') }}" class="btn btn-primary mb-3">Back</a></div>

        <!-- student edit Form -->
      
            @csrf
           
            <div class="card-body">
                <h1 class=" card-title">Name:{{$show->name}}</h1>
                <p class=" card-text">email:{{$show->email}}</p>
                <p class=" card-text">phone:{{$show->phone}}</p>
                <p class=" card-text">address:{{$show->address}}</p>
                <p class=" card-text">dob:{{$show->dob}}</p>
                
            </div>


          
    </div>
@endsection