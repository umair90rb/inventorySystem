@extends('layouts.app')

@section('content')


  <div class="row">

    <div class="col-md-6 col-md-offset-3">

      <div class="panel panel-default">
        <div class="panel-heading">Update Supplier Detail</div>
        <div class="panel-body">
          <form method="post" action="{{route('supplier.update', ['id'=>$supplier->id])}}">
            {{  csrf_field() }}
            {{ method_field('PUT') }}
            
            <div class="form-group">
              <label for="name">Supplier Name</label>
              <input type="text" name="name" value="{{$supplier->name}}" class="form-control" id="name" placeholder="Supplier Name">
            </div>

            <div class="form-group">
              <label for="contact">Supplier Contact</label>
              <input type="text" name="contact" class="form-control" value="{{$supplier->contact}}" id="contact" placeholder="Supplier contact">
            </div>

            <div class="form-group">
              <label for="email">Supplier  Email</label>
              <input type="text" name="email" class="form-control" value="{{$supplier->email}}" id="email" placeholder="Supplier Email">
            </div>

            <div class="form-group">
              <label for="address">Supplier  Address</label>
              <input type="text" name="address" class="form-control" value="{{$supplier->address}}" id="address" placeholder="Supplier Address">
            </div>

            <div class="form-group">
              <label for="comment">Supplier  Comment</label>
              <input type="text" name="comment" class="form-control" value="{{$supplier->comment}}" id="comment" placeholder="Supplier Comment">
            </div>

            <button type="submit" class="btn btn-default btn-block">Update Supplier Detail</button>
          </form>

        </div>
      </div>

    </div>

  </div>


@endsection
