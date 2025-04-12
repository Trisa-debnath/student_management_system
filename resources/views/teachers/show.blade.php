
@extends('layout')

@section('content')
    <div class="card">
        
        <div class="card-header">
        <h4 class="mb-3">view Teacher</h4>
        <a href="{{ route('teacher.index') }}" class="btn btn-primary mb-3">Back</a></div>

        <!-- teacher View page-->
      
            @csrf
           
            <div class="card-body">
                <h1 class=" card-title">ID:{{$teache->id}}</h1>
                <p class=" card-title">Name:{{$teache->name}}</p>
                <p class=" card-text">Type:{{$teache->addrress}}</p>
                <p class=" card-text">Type:{{$teache->phone}}</p>
                <p class=" card-text">Type:{{$teache->department}}</p>
                <p class=" card-text">Type:{{$teache->subject}}</p>
                
            </div>


          
    </div>
@endsection