
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Fill the form below</h1>
        <div class="message">
       @if(session('success'))
       <h3 class="mb-4">{{session('success')}}</h3>
        @endif
        </div>

        <a href="{{ route('student.index') }}" class="btn btn-primary mb-3">Back</a>

        <!-- Student Form -->
        <form action="{{ route('student.store') }}"  method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control">
            </div>
            <div class="mb-3">
                <label for="dob" class="form-label">Date of Birth</label>
                <input type="date" name="dob" id="dob" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

      
              
            
    </div>
@endsection