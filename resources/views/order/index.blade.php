@extends('layouts.app')

@section('content')

  
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <table class="table table-hover">
          <thead>
            <td>Customer Name</td>
            <td>Order Date</td>
            <td>Status</td>
            <td>Action</td>
          </thead>
          @foreach($orders as $order)
          <tr>
            <td>{{  $order->customer()->name  }}</td>
            <td>{{ $order->created_at  }}</td>
            <td>{{  $order->payment_method }}</td>
            <td>
              <form method="post" action="{{route('order.destroy', ['id'=>$order->id])}}" style="display:inline;">
                {{  csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" name="button" class="btn btn-danger">Delete</button>
              </form>
              <a href="{{route('order.edit', ['id'=>$order->id])}}" class="btn btn-primary">Update</a>
              <a href="{{route('order.show', ['id'=>$order->id])}}" class="btn btn-success">View Detail</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="col-md-4 ">
        
        <a href="{{ route('order.create') }}" class="btn btn-primary btn-block">Create New Order</a>

      </div>
    </div>
  </div>
  
  


@endsection
