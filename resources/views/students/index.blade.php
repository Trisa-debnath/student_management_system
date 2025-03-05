
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Login Student account</h1>
        <a href="{{ route('student.create') }}" class="btn btn-primary mb-3">Add New Student</a>

        <!-- Student Form -->
        <form action="{{ route('student.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control">
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

        <!-- Student Table -->
        
    </div>
@endsection