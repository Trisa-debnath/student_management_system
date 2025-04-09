
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Batches's information</h1>
        
<div class="message">
@if(session('success'))
<h3 class="mb-4">{{session('success')}}</h3>
@endif

<a href="{{ route('batches.create') }}" class="btn btn-primary mb-3">Add New Batches</a>

</div>

        <!-- Batches Table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Batches Name</th>
                    <th>Course</th>
                    <th>Start_date</th>
                    <th>view</th>
                    <th>Edit</th>
                    
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($batches as $batch)
                    <tr>
                        <td>{{ $batch->id }}</td>
                        <td>{{ $batch->name }}</td>
                        <td>{{ $batch->course->name}}</td>
                        <td>{{ $batch->start_date}}</td>
                    
                            <td>  <a href="{{ route('batches.show', $batch->id) }}" method="GET"  class="btn btn-warning btn-sm">View</a></td>
                           
                            <td>  <a href="{{ route('batches.edit', $batch->id) }}" method="GET"  class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('batches.update', $batch->id) }}" method="POST" style="display:inline;"></td>
                            
                        <td>
                        @csrf
                                @method('DELETE')
                    
                                <a href="{{ route('batches.delete', $batch->id) }}" method="GET"  class="btn btn-warning btn-sm">
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