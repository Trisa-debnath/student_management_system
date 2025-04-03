
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Fill the form below</h1>
        <a href="{{ route('batches.index') }}" class="btn btn-primary mb-3">Back</a>

        <!-- batches Form -->
        <form action="{{ route('batches.store') }}"  method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="course_id" class="form-label">Course_id</label>
                <input type="text" name="course_id" id="course_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start_date</label>
                <input type="Date" name="start_date" id="start_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

      
              
            
    </div>
@endsection