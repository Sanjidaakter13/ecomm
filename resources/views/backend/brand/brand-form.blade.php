@extends ('master')

@section('content')

<form action="{{route('brand.store')}}" method="post">

@csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="brand_name" class="form-control" id="exampleFormControlInput1" placeholder="name">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" name="brand_description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection