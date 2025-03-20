
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Selected Subject list</h1>
       

     

        <!-- Subject Table -->
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
                    
                         <td>  <a href="{{ route('subject.edit', $subject->id) }}" method="GET"  class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('subject.update', $subject->id) }}" method="POST" style="display:inline;"></td>
                           
                            
                        <td>
                        @csrf
                                @method('DELETE')
                    
                                <a href="{{ route('subject.delete', $subject->id) }}" method="GET"  class="btn btn-warning btn-sm">
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