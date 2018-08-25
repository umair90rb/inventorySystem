@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <div class="panel panel-default">
        <div class="panel-heading">Add Supplier</div>
        <div class="panel-body">
          <form method="post" action="{{route('supplier.store')}}">
            {{  csrf_field() }}

            <div class="form-group">
              <label for="name">Supplier Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Supplier Name">
            </div>

            <div class="form-group">
              <label for="price">Contact Number</label>
              <input type="text" name="contact" class="form-control" id="price" placeholder="Contact Number">
            </div>

            <div class="form-group">
              <label for="stock">Supplier Email</label>
              <input type="text" name="email" class="form-control" id="stock" placeholder="Supplier Email">
            </div>

            <div class="form-group">
              <label for="address">Supplier Address</label>
              <textarea type="text" name="address" class="form-control" id="address" placeholder="Supplier Address"></textarea>
            </div>

            <div class="form-group">
              <label for="comment">Comment</label>
              <textarea type="text" name="comment" class="form-control" id="comment" placeholder="Any Comment About Supplier!"></textarea>
            </div>

            <button type="submit" class="btn btn-default btn-block">Add Supplier</button>
          </form>

        </div>
      </div>

    </div>
  </div>


@endsection
