
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Enrollment's information</h1>
        
<div class="message">
@if(session('success'))
<h3 class="mb-4">{{session('success')}}</h3>
@endif

<a href="{{ route('enroll.create') }}" class="btn btn-primary mb-3">Add New Enroll</a>

</div>

        <!-- enrollment Table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Enroll_No</th>
                    <th>Batch</th>
                    <th>Student</th>
                    <th>join_date</th>
                    <th>fee</th>
                    <th>view</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $enroll as $enrol)
                    <tr>
                        <td>{{ $enrol->id }}</td>
                        <td>{{ $enrol->enroll_no }}</td>
                        <td>{{ $enrol->batches_id }}</td>
                        <td>{{ $enrol->student_id}}</td>
                        <td>{{ $enrol->join_date}}</td>
                        <td>{{ $enrol->fee}}</td>
                    
                            <td>  <a href="#" method="GET"  class="btn btn-warning btn-sm">View</a></td>
                           
                            <td>  <a href="{{ route('enroll.edit', $enrol->id) }}" method="GET"  class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('enroll.update', $enrol->id) }}" method="POST" style="display:inline;"></td>
                            
                        <td>
                        @csrf
                                @method('DELETE')
                    
                                <a href="{{ route('enroll.delete', $enrol->id) }}" method="GET"  class="btn btn-warning btn-sm">
                                <button type="submit" class="btn btn-danger btn-sm">Delete
                                </a>

                                

                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection