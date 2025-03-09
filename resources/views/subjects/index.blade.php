
@extends('layout')


@section('content')
    <div class="container">
        <h1 class="mb-4">Subject Management</h1>
        <div class="div" style="color: green;"><h5>Add new subject</h5></div>
        <!-- <a href="#" class="btn btn-primary mb-3">Add New class</a>-->

        <!-- Subject Form -->
        <form action="{{ route('subject.store') }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"> Subject Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            @error ('name')
            <p class="text danger">{{$message}}
                @enderror

            </p>
         
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
              <select name="type" class="form-control">
                <option value="">Selected</option>
                <option value="Theory">Theory</option>
                <option value="Practical">Practical</option>


              </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        
        
    </div>
@endsection