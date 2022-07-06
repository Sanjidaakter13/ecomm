@extends('master')

@section('content')

<h3>Category-list</h3>

<a class="btn btn-success" href="{{route('category.form')}}"> Create Category</a>
<table class="table table-striped">
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Description</th>
      <th scope="col">Created at</th>
      <th scope="col">Updated at</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>
    @foreach($categories as $key=>$category)
    <tr>
      <td>{{$category->name}}</td>
      <td>{{$category->status}}</td>
      <td>{{$category->description}}</td>
      <td>{{$category->created_at}}</td>
      <td>{{$category->updated_at}}</td>
      <td>
        <a class="btn btn-success" href="">View</a>
        <a class="btn btn-primary" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
     
    </tr>
  </tbody>
  @endforeach
</table>

@endsection