@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <div class="panel panel-default">
        <div class="panel-heading">Customer Detail</div>
        <div class="panel-body">

          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-4 control-label">Customer Name</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$customer->name}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Customer Contact</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$customer->contact}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Customer Email</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$customer->email}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Customer Address</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$customer->address}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Comment about Customer</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$customer->comment}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Customer Added</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$customer->created_at->toFormattedDateString()}}</p>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>


@endsection
