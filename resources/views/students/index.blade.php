
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">list regestered student</h1>

        <div class="message mb-3">
@if(session('success'))
<h3 class="mb-4">{{session('success')}}</h3>
@endif
        </div>
        <a href="{{ route('student.create') }}" class="btn btn-primary mb-3">Add new student</a>

     

        <!-- Student Table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->dob}}</td>

                        <td>  <a href="{{ route('student.show', $student->id)}}" method="GET"  class="btn btn-warning btn-sm">View</a></td>

                        <td>
                            <a href="{{ route('student.edit', $student->id)}}" method="GET"  class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('student.update', $student->id)}}" method="POST" style="display:inline;"></td>
                            <td>
                                @csrf
                                @method('DELETE')
                    
                                <a href="{{ route('student.delete', $student->id) }}" method="GET"  class="btn btn-warning btn-sm">
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