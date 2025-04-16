
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Update payment information</h1>
        <a href="{{ route('payment.index') }}" class="btn btn-primary mb-3">Back</a>

        <!-- payment Form -->
        <form action="{{ route('payment.update',$payment->id) }}"  method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="enrollmant_id" class="form-label">Enrollmant_id</label>
            <select name="enrollmant_id" id="enrollmant_id" class="form-control" >
           @foreach($enrollments as $id => $enroll_no)
           <option value="{{$id}}"> {{$enroll_no}} </option>
           @endforeach
            </select>
            </div>
            <div class="mb-3">
                <label for="paid_date" class="form-label">Paid_date</label>
                <input type="date" name="paid_date" id="paid_date" class="form-control" required value="{{$payment->paid_date}}">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="text" name="amount" id="amount" class="form-control" required value="{{$payment->amount}}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>       
    </div>
@endsection