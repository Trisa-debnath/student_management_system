
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Teacher's information</h1>
        
<div class="message">
@if(session('success'))
<h3 class="mb-4">{{session('success')}}</h3>
@endif

<a href="{{ route('teacher.create') }}" class="btn btn-primary mb-3">Add New Teacher</a>

</div>

        <!-- Subject Table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Teacher's Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Department</th>
                    <th>class</th>
                    <th>view</th>
                    <th>Edit</th>
                    
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teach as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->addrress }}</td>
                        <td>{{ $teacher->phone }}</td>
                        <td>{{ $teacher->department }}</td>
                        <td>{{ $teacher->subject }}</td>
                    
                            <td>  <a href="#" method="GET"  class="btn btn-warning btn-sm">View</a></td>
                           
                            <td>  <a href="{{ route('teacher.edit', $teacher->id) }}" method="GET"  class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('teacher.update', $teacher->id) }}" method="POST" style="display:inline;"></td>
                            
                        <td>
                        @csrf
                                @method('DELETE')
                    
                                <a href="{{ route('teacher.delete', $teacher->id) }}" method="GET"  class="btn btn-warning btn-sm">
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