
@extends('layout')

@section('content')
    <div class="card">
        
        <div class="card-header">
        <h4 class="mb-3">view batches information</h4>
        <a href="{{ route('batches.index') }}" class="btn btn-primary mb-3">Back</a></div>

        <!-- student edit Form -->
      
            @csrf
           
            <div class="card-body">
                <h1 class=" card-title">Name:{{$show->name}}</h1>
                <p class=" card-text">email:{{$show->course_id}}</p>
                <p class=" card-text">phone:{{$show->start_date}}</p>
            </div>      
    </div>
@endsection