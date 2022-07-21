@extends('master')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>

    </tr>
  </thead>
  <tbody>
    @foreach($brands as $data)
    <tr>
     <td>{{$data->name}}</td>
     <td>{{$data->description}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="{{route('brand.form')}}" class="btn btn-primary">Create brand</a>

@endsection
