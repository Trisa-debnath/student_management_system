
@extends('layout')

@section('content')
    <div class="card">
        
        <div class="card-header">
        <h4 class="mb-3">view payment information</h4>
        <a href="{{ route('payment.index') }}" class="btn btn-primary mb-3">Back</a></div>

        <!-- payment edit Form -->
      
            @csrf
           
            <div class="card-body">
                <h1 class=" card-title">ID:{{$show->id}}</h1>
                <h1 class=" card-title">Enrollmant_id:{{$show->enrollmant->enroll_no}}</h1>
                <p class=" card-text">Paid_date:{{$show->paid_date}}</p>
                <p class=" card-text">Amount:{{$show->amount}}</p>
                
            </div>


          
    </div>
@endsection