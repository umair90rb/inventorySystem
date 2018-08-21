@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <div class="panel panel-default">
        <div class="panel-heading">Product Detail</div>
        <div class="panel-body">

          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-4 control-label">Product Name</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$product->name}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Product Categorie</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$product->categorie->name}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Product Brand</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$product->brand->name}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Product Price</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$product->price}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Product Quantity</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$product->stock}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Product Added</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$product->created_at->toFormattedDateString()}}</p>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>


@endsection
