@inject('customers', 'App\Customer')
@inject('products', 'App\Product')

@extends('layouts.app')

@section('content')

  <div class="row">

    
    <div class="container">
      
    <form method="post" action="{{route('order.store')}}">
            {{  csrf_field() }}
      
    <div class="col-md-9">

      <div class="panel panel-default">
        <div class="panel-heading">Order Detail</div>
        <div class="panel-body">
          
          
          <div class="row">

          

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                  <label for="name">Customer Name</label>
                    <select name="name" class="form-control" id="name">
                      @foreach($customers->customers() as $customer)
                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                      @endforeach
                    </select>
              </div>  
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="contact">Customer Contact</label>
                <input type="text" class="form-control" id="contact" placeholder="Customer Contact" readonly>
              </div>    
            </div>
            
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="email">Customer Email</label>
                <input type="text" class="form-control" id="email" placeholder="Customer Email" readonly>
              </div>    
            </div>
            

          </div>
          
        
          
          <div class="panel panel-default">
            <div class="panel-body">
               
              <div class="row">

                 <div class="col-md-4">
                   
                  <div class="form-group">
                    <label for="productName">Product Name</label>
                    <select name="productName" class="form-control" id="productName">
                      @foreach($products->products() as $product)
                        <option value="{{$product->id}}">{{$product->name}}</option>
                      @endforeach
                    </select>
                  </div>

                 </div>

                 <div class="col-md-4">
                   
                     <div class="form-group">
                       <label  for="productQuantity">Product Quantity</label>
                       <input type="email" name="productQuantity" class="form-control" id="productQuantity" placeholder="Enter Product Quantity">
                     </div>

                 </div>

                 <div class="col-md-4">
                   
                     <div class="form-group">
                       <label  for="productPrice">Product Unit Price</label>
                       <input type="email" name="productPrice" class="form-control" id="productPrice" placeholder="Product Unit Price" readonly>
                     </div>

                 </div>

              </div>

              
              <div class="row">
                
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  
                  <button type="button"  class="btn btn-danger">Delete Row</button>
                    
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                  <button type="button"  class="btn btn-success pull-right">Insert Row</button>
                  
                </div>
                

              </div>
              

              </div>
          </div>
          
            <div class="form-group">
              <label for="shippingAddress">Shipping Address</label>
              <input type="text" name="shipping_address" class="form-control" id="shippingAddress" placeholder="Shipping Address">
            </div>
          
          <div class="row">
            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

              <div class="form-group">
              <label for="city">City</label>
              <input type="text" name="city" class="form-control" id="city" placeholder="City">
            </div>


            </div>
            
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

              <div class="form-group">
              <label for="paymentMethod">Payment Method</label>
              <input type="text" name="payment_method" class="form-control" id="paymentMethod" placeholder="Payment Method">
            </div>


            </div>
            
          </div>
          
            
            
        </div>
      </div>

    </div>
    <div class="col-md-3">

    
    <div class="panel panel-default">
      <div class="panel-body">

          <div class="form-group">
          <label for="total">Total</label>
          <input type="text" name="total" class="form-control" id="total" placeholder="Total"/>
        </div>

        <div class="form-group">
          <label for="discount">Discount</label>
          <input type="text" name="discount" class="form-control" id="discount" placeholder="Discount"/>
        </div>

        <button type="submit" class="btn btn-warning btn-block">Create Order</button>
      </div>
    </div>
    

    </div>

    </form>
      
    </div>
  </div>
<button id='test'>Test</button>
<div id='div1'></div>
@endsection

@section('script')

  <script>
    
    
    $('#name').change(function(){
      $("#name option:selected").each(function(){
        $.ajax({
          method: "POST",
          url: "{{route('contactEmail')}}",
          data: { id: $(this).val(), _token: $('[name="_token"]').val()  },
          success: function(result){
            $('#contact').val(result.contact);
            $('#email').val(result.email);
          }
        });
      });
    });

    $('#productName').change(function(){
      $("#productName option:selected").each(function(){
        $.ajax({
          method: "POST",
          url: "{{route('productDetail')}}",
          data: { id: $(this).val(), _token: $('[name="_token"]').val()  },
          success: function(result){
            $('#productPrice').val(result.price);
          }
        });
      });
    });

  </script>

@endsection