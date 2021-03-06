@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <div class="panel panel-default">
        <div class="panel-heading">Add Product</div>
        <div class="panel-body">
          <form method="post" action="{{route('product.store')}}">
            {{  csrf_field() }}

            <div class="form-group">
              <label for="categorie_id">Select Categorie</label>
              <select class="form-control" name="categorie_id">
                @foreach($categories as $categorie)
                  <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="name">Select Brand</label>
              <select class="form-control" name="brand_id">
                @foreach($brands as $brand)
                  <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <label for="name">Product Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Product Name">
            </div>

            <div class="form-group">
              <label for="price">Product Price</label>
              <input type="text" name="price" class="form-control" id="price" placeholder="Product Price">
            </div>

            <div class="form-group">
              <label for="stock">Product Quantity</label>
              <input type="text" name="stock" class="form-control" id="stock" placeholder="Product Quantity">
            </div>

            <button type="submit" class="btn btn-default btn-block">Add Product</button>
          </form>

        </div>
      </div>

    </div>
  </div>


@endsection
