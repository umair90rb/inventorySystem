@extends('layouts.app')

@section('content')

  
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <table class="table table-hover">
          <thead>
            <td>Product Name</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>Action</td>
          </thead>
          @foreach($products as $product)
          <tr>
            <td>{{  $product->name  }}</td>
            <td>Rs.{{ $product->price  }}</td>
            <td>{{  $product->stock  }}</td>
            <td>
              <form method="post" action="{{route('product.destroy', ['id'=>$product->id])}}" style="display:inline;">
                {{  csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" name="button" class="btn btn-danger">Delete</button>
              </form>
              <a href="{{route('product.edit', ['id'=>$product->id])}}" class="btn btn-primary">Update</a>
              <a href="{{route('product.show', ['id'=>$product->id])}}" class="btn btn-success">View Detail</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="col-md-4 ">
        
        <a href="{{ route('product.create') }}" class="btn btn-primary btn-block">Add Product</a>

      </div>
    </div>
  </div>
  
  


@endsection
