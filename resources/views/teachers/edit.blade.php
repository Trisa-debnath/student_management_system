
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Update teacher's information</h1>
        <a href="{{ route('teacher.index') }}" class="btn btn-primary mb-3">Back</a>

        <!-- Student Form -->
        <form action="{{ route('teacher.update',$teacher->id) }}"  method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{$teacher->name}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" required value="{{$teacher->address}}">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required value="{{$teacher->phone}}">
            </div>
            <div class="mb-3">
                <label for="department" class="form-label">Department</label>
                <input type="text" name="department" id="department" class="form-control" value="{{$teacher->department}}">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" value="{{$teacher->subject}}">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

      
              
            
    </div>
@endsection