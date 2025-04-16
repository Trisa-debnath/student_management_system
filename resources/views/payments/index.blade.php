
@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">payment's information</h1>
        
<div class="message">
@if(session('success'))
<h3 class="mb-4">{{session('success')}}</h3>
@endif

<a href="{{ route('payment.create') }}" class="btn btn-primary mb-3">Add New payment</a>

</div>

        <!-- payment Table -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Enrollmant_id</th>
                    <th>Paid_date</th>
                    <th>Amount</th>
                    <th>View</th>
                    <th>Edit</th>
                     <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payment as $paym)
                    <tr>
                        <td>{{ $paym->id }}</td>
                        <td>{{ $paym->enrollmant_id}}</td>
                        <td>{{ $paym->paid_date }}</td>
                        <td>{{ $paym->amount}}</td>
                    
                            <td>  <a href="{{ route('payment.show', $paym->id) }}" method="GET"  class="btn btn-warning btn-sm">View</a></td>
                           
                            <td>  <a href="{{ route('payment.edit', $paym->id) }}" method="GET"  class="btn btn-warning btn-sm">Edit</a>
                            
                            <form action="{{ route('payment.update', $paym->id) }}" method="POST" style="display:inline;"></td>
                            
                        <td>
                        @csrf
                                @method('DELETE')
                    
                                <a href="{{ route('payment.delete', $paym->id) }}" method="GET"  class="btn btn-warning btn-sm">
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