@extends('layouts.app')

@section('content')

  
  <div class="container">
    
      <div class="panel panel-default">
        <div class="panel-heading">Order Detail</div>
        <div class="panel-body">

        <div class="row">
          <div class="col-md-4">

          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-6 control-label">Customer Name</label>
              <div class="col-sm-6">
                <p class="form-control-static">{{$order->customer->name}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-6 control-label">Customer Contact</label>
              <div class="col-sm-6">
                <p class="form-control-static">{{$order->customer->contact}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-6 control-label">Customer Email</label>
              <div class="col-sm-6">
                <p class="form-control-static">{{$order->customer->email}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-6 control-label">Shipping Address</label>
              <div class="col-sm-6">
                <p class="form-control-static">{{$order->shipping_address}}, {{$order->city}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-6 control-label">Payment Method</label>
              <div class="col-sm-6">
                <p class="form-control-static">{{$order->payment_method}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-6 control-label">Order Created At</label>
              <div class="col-sm-6">
                <p class="form-control-static">{{$order->created_at->toFormattedDateString()}}</p>
              </div>
            </div>
          </form>

        </div>
        
        
        <div class="col-md-3">
          <form class="form-horizontal">

            <div class="form-group">
                <label class="col-sm-6 control-label">Order Sub Total</label>
                <div class="col-sm-6">
                  <p class="form-control-static">Rs.{{$order->sub_total}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6 control-label">Order Discount</label>
                <div class="col-sm-6">
                  <p class="form-control-static">Rs.{{$order->discount}}</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6 control-label">Order Total</label>
                <div class="col-sm-6">
                  <p class="form-control-static">Rs.{{$order->total}}</p>
                </div>
            </div>

          </form>
        </div>
        
        <div class="col-md-5">
          
          
          <table class="table table-condensed table-hover">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
            @foreach($order->products as $product)
              <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->pivot->quantity}}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
          
                       
        </div>
        
      </div>

    </div>
  </div>

</div>
  

@endsection
