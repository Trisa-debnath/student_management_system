
@extends('layout')

@section('content')
    <div class="card">
        
        <div class="card-header">
        <h4 class="mb-3">view subject's information</h4>
        <a href="{{ route('subject.index') }}" class="btn btn-primary mb-3">Back</a></div>

        <!-- subject edit Form -->
      
            @csrf
           
            <div class="card-body">
                <h1 class=" card-title">ID:{{$subj->id}}</h1>
                <h1 class=" card-title">Name:{{$subj->name}}</h1>
                <p class=" card-text">Type:{{$subj->type}}</p>
                
            </div>


          
    </div>
@endsection