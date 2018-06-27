@extends('layouts.app')

@section('content')


  <div class="row">
    <div class="col-md-8">
      <table class="table table-hover">
        <thead>
          <td>Name</td>
          <td>Action</td>
        </thead>
        @foreach($categories as $categorie)
        <tr>
          <td>{{  $categorie->name  }}</td>
          <td>
            <form method="post" action="{{route('categorie.destroy', ['id'=>$categorie->id])}}">
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
      <div class="panel panel-default">
        <div class="panel-heading">Add Categorie</div>
        <div class="panel-body">
          <form method="post" action="{{route('categorie.store')}}">
            {{  csrf_field() }}
            <div class="form-group">
              <label for="categorieName">Categorie Name</label>
              <input type="text" name="name" class="form-control" id="categorieName" placeholder="Categorie Name">
            </div>
            <button type="submit" class="btn btn-default">Add Categorie</button>
          </form>

        </div>
      </div>

    </div>
  </div>


@endsection
