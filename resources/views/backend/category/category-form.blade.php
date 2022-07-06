@extends('master')
@section('content')

<h2>Create new product</h2>

<form  action="{{route('category.store')}}" method="post">
 @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" name="category_name" id="" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="">Status</label>
    <select class="custom-select custom-select-sm">
  <option name="category_status" selected>Open this select menu</option>
  <option value="1">Active</option>
  <option value="2">Deactive</option>
</select>
  </div>

  <div class="form-group">
    <label for="">Description</label>
    <input type="text" class="form-control" name="category_description" id="" placeholder="Enter description">
  </div>
  



<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
