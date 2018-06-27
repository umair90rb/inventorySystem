@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-8">
      <table class="table table-hover">
        <thead>
          <td>Name</td>
          <td>Action</td>
        </thead>
        @foreach($brands as $brand)
        <tr>
          <td>{{  $brand->name  }}</td>
          <td><a href="{{route('deleteBrand', ['id'=>$brand->id])}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
    <div class="col-md-4 ">
      <div class="panel panel-default">
        <div class="panel-heading">Add Brand</div>
        <div class="panel-body">
          <form method="post" action="{{route('addBrand')}}">
            {{  csrf_field() }}
            <div class="form-group">
              <label for="brandName">Brand Name</label>
              <input type="text" name="name" class="form-control" id="brandName" placeholder="Brand Name">
            </div>
            <button type="submit" class="btn btn-default">Add Brand</button>
          </form>

        </div>
      </div>

    </div>
  </div>


@endsection
