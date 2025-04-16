
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Update Batches's information</h1>
        <a href="{{ route('batches.index') }}" class="btn btn-primary mb-3">Back</a>

        <!-- batches edit Form -->
        <form action="{{ route('batches.update',$batc->id) }}"  method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Batches Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{$batc->name}}">
            </div>
            <div class="mb-3">
                <label for="course_id" class="form-label">Course_id</label>
                <input type="text" name="course_id" id="course_id" class="form-control" required value="{{$batc->course->name}}">
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start_date</label>
                <input type="date" name="start_date" id="start_date" class="form-control" required value="{{$batc->start_date}}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

      
              
            
    </div>
@endsection