@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-6 col-md-offset-3">

      <div class="panel panel-default">
        <div class="panel-heading">Supplier Detail</div>
        <div class="panel-body">

          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-4 control-label">Supplier Name</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$supplier->name}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Supplier Contact</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$supplier->contact}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Supplier Email</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$supplier->email}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Supplier Address</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$supplier->address}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Comment about Supplier</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$supplier->comment}}</p>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-4 control-label">Supplier Added</label>
              <div class="col-sm-8">
                <p class="form-control-static">{{$supplier->created_at->toFormattedDateString()}}</p>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>


@endsection
