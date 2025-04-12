
@extends('layout')

@section('content')
    <div class="card">
        
        <div class="card-header">
        <h4 class="mb-3">view courses information</h4>
        <a href="{{ route('course.index') }}" class="btn btn-primary mb-3">Back</a></div>

        <!-- courses edit Form -->
      
            @csrf
           
            <div class="card-body">
                <h1 class=" card-title">ID:{{$show->id}}</h1>
                <h1 class=" card-title">Name:{{$show->name}}</h1>
                <p class=" card-text">Type:{{$show->syllabus}}</p>
                <p class=" card-text">Type:{{$show->duration()}}</p>
                
            </div>


          
    </div>
@endsection