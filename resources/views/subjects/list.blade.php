
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Selected Subject list</h1>
        <a href="{{ route('student.index') }}" class="btn btn-primary mb-3">Back</a>

     

        <!-- Student Table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Subject Name</th>
                    <th>Type</th>
                    <th>Edit</th>
                    
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subj as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->type }}</td>
                    
                         <td>  <a href="#" method="GET"  class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="#" method="POST" style="display:inline;"></td>
                           

                        <td>
                        @csrf
                                @method('DELETE')
                    
                                <a href="#" method="GET"  class="btn btn-warning btn-sm">
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