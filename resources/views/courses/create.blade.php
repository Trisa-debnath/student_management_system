
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Fill the form below</h1>
        <a href="{{ route('course.index') }}" class="btn btn-primary mb-3">Back</a>

        <!-- courses Form -->
        <form action="{{ route('course.store') }}"  method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="syllabus" class="form-label">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" name="duration" id="duration" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

      
              
            
    </div>
@endsection