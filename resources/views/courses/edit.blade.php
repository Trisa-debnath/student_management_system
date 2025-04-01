
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Update Courses information</h1>
        <a href="{{ route('course.index') }}" class="btn btn-primary mb-3">Back</a>

        <!-- Courses Form -->
        <form action="{{ route('course.update',$cou->id) }}"  method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{$cou->name}}">
            </div>
            <div class="mb-3">
                <label for="syllabus" class="form-label">Syllabus</label>
                <input type="text" name="syllabus" id="syllabus" class="form-control" required value="{{$cou->syllabus}}">
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Duration</label>
                <input type="text" name="duration" id="duration" class="form-control" required value="{{$cou->duration}}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

      
              
            
    </div>
@endsection