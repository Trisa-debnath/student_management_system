
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Courses's information</h1>
        
<div class="message">
@if(session('success'))
<h3 class="mb-4">{{session('success')}}</h3>
@endif

<a href="{{ route('course.create') }}" class="btn btn-primary mb-3">Add New course</a>

</div>

        <!-- course Table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Couse Name</th>
                    <th>Syllabus</th>
                    <th>Duration</th>
                    <th>view</th>
                    <th>Edit</th>
                     <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($course as $courses)
                    <tr>
                        <td>{{ $courses->id }}</td>
                        <td>{{ $courses->name }}</td>
                        <td>{{ $courses->syllabus }}</td>
                        <td>{{ $courses->duration()}}</td>
                    
                            <td>  <a href="{{ route('course.show', $courses->id) }}" method="GET"  class="btn btn-warning btn-sm">View</a></td>
                           
                            <td>  <a href="{{ route('course.edit', $courses->id) }}" method="GET"  class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('course.update', $courses->id) }}" method="POST" style="display:inline;"></td>
                            
                        <td>
                        @csrf
                                @method('DELETE')
                    
                                <a href="{{ route('course.delete', $courses->id) }}" method="GET"  class="btn btn-warning btn-sm">
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