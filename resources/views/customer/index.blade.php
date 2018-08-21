@extends('layouts.app')

@section('content')

  
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <table class="table table-hover">
          <thead>
            <td>Customer Name</td>
            <td>Contact No</td>
            <td>Email</td>
            <td>Action</td>
          </thead>
          @foreach($customers as $customer)
          <tr>
            <td>{{  $customer->name  }}</td>
            <td>Rs.{{ $customer->price  }}</td>
            <td>{{  $customer->stock  }}</td>
            <td>
              <form method="post" action="{{route('customer.destroy', ['id'=>$customer->id])}}" style="display:inline;">
                {{  csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" name="button" class="btn btn-danger">Delete</button>
              </form>
              <a href="{{route('customer.edit', ['id'=>$customer->id])}}" class="btn btn-primary">Update</a>
              <a href="{{route('customer.show', ['id'=>$customer->id])}}" class="btn btn-success">View Detail</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="col-md-4 ">
        
        <a href="{{ route('customer.create') }}" class="btn btn-primary btn-block">Add Customer</a>

      </div>
    </div>
  </div>
  
  


@endsection
