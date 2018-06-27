@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-8">
      <table class="table table-hover">
        <thead>
          <td>Name</td>
          <td>Action</td>
        </thead>
        @foreach($products as $product)
        <tr>
          <td>{{  $product->name  }}</td>
          <td>
            <form method="post" action="{{route('product.destroy', ['id'=>$product->id])}}">
              {{  csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" name="button" class="btn btn-danger">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
    <div class="col-md-4 ">

      <a href="{{ route('product.create') }}" class="btn btn-primary btn-block">Add Product</a>

    </div>
  </div>


@endsection
