
@extends('layout')


@section('content')
    <div class="container">
        <h1 class="mb-4">Update Subject</h1>
        
         <a href="{{ route('subject.show') }}" class="btn btn-primary mb-3">Back</a>


         
      
        <!-- Subject Form -->
        <form action="{{ route('subject.update',$subject->id) }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label"> Subject Name</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{$subject->name}}">
            </div>
            
         
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
              <select name="type" class="form-control">
                <option value="">Selected</option>
                <option value="Theory" {{$subject->type ='Theory' ? 'Selected': ''}}>Theory</option>
                <option value="Practical" {{$subject->type ='Practical' ? 'Selected': ''}}>Practical</option>


              </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

        
        
    </div>
@endsection