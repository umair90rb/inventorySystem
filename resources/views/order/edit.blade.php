@extends('layouts.app')

@section('content')


  <div class="row">

    <div class="col-md-6 col-md-offset-3">

      <div class="panel panel-default">
        <div class="panel-heading">Update Customer Detail</div>
        <div class="panel-body">
          <form method="post" action="{{route('customer.update', ['id'=>$customer->id])}}">
            {{  csrf_field() }}
            {{ method_field('PUT') }}
            
            <div class="form-group">
              <label for="name">Customer Name</label>
              <input type="text" name="name" value="{{$customer->name}}" class="form-control" id="name" placeholder="Customer Name">
            </div>

            <div class="form-group">
              <label for="contact">Customer Contact</label>
              <input type="text" name="contact" class="form-control" value="{{$customer->contact}}" id="contact" placeholder="Customer contact">
            </div>

            <div class="form-group">
              <label for="email">Customer  Email</label>
              <input type="text" name="email" class="form-control" value="{{$customer->email}}" id="email" placeholder="Customer Email">
            </div>

            <div class="form-group">
              <label for="address">Customer  Address</label>
              <input type="text" name="address" class="form-control" value="{{$customer->address}}" id="address" placeholder="Customer Address">
            </div>

            <div class="form-group">
              <label for="comment">Customer  Comment</label>
              <input type="text" name="comment" class="form-control" value="{{$customer->comment}}" id="comment" placeholder="Customer Comment">
            </div>

            <button type="submit" class="btn btn-default btn-block">Update Customer Detail</button>
          </form>

        </div>
      </div>

    </div>

  </div>


@endsection
