
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Fill the form below</h1>
        <a href="{{ route('enroll.index') }}" class="btn btn-primary mb-3">Back</a>

        <!-- batches Form -->
        <form action="{{ route('enroll.store') }}"  method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="enroll_no" class="form-label">Enroll_No</label>
                <input type="text" name="enroll_no" id="enroll_no" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="batches_id" class="form-label">Batches_id</label>
                <input type="text" name="batches_id" id="batches_id" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="student_id" class="form-label">Student_id</label>
                <input type="text" name="student_id" id="student_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="join_date" class="form-label">Join_date</label>
                <input type="date" name="join_date" id="join_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="fee" class="form-label">Fee</label>
                <input type="text" name="fee" id="fee" class="form-control" required>
            </div>




            <button type="submit" class="btn btn-success">Submit</button>
        </form>

      
              
            
    </div>
@endsection