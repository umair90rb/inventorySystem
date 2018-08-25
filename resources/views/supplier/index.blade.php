@extends('layouts.app')

@section('content')

  
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <table class="table table-hover">
          <thead>
            <td>Supplier Name</td>
            <td>Contact No</td>
            <td>Email</td>
            <td>Action</td>
          </thead>
          @foreach($suppliers as $supplier)
          <tr>
            <td>{{  $supplier->name  }}</td>
            <td>{{ $supplier->contact  }}</td>
            <td>{{  $supplier->email }}</td>
            <td>
              <form method="post" action="{{route('supplier.destroy', ['id'=>$supplier->id])}}" style="display:inline;">
                {{  csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" name="button" class="btn btn-danger">Delete</button>
              </form>
              <a href="{{route('supplier.edit', ['id'=>$supplier->id])}}" class="btn btn-primary">Update</a>
              <a href="{{route('supplier.show', ['id'=>$supplier->id])}}" class="btn btn-success">View Detail</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <div class="col-md-4 ">
        
        <a href="{{ route('supplier.create') }}" class="btn btn-primary btn-block">Add Supplier</a>

      </div>
    </div>
  </div>
  
  


@endsection
