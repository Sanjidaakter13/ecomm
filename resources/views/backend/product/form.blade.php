@extends('backend.template.master')

@section('content')

<h2>Product Details</h2>


@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif


<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
 @csrf
    
    <div class="form-group">
      <label for="">Name*</label>
      <input  class="form-control"  type="text" name="name"  id="" class="form-control" placeholder="Name" required>
    </div>
    <div class="form-group">
      <label for="">Price*</label>
      <input  class="form-control"  type="number" name="price" id="" class="form-control" placeholder="Price" required min="10">
    </div>
    <div class="form-group">
      <label for="">Quantity*</label>
      <input  class="form-control"  type="number" name="quantity" id="" class="form-control" placeholder="Quantity" required min="1">
    </div>
    <div class="form-group">
      <label for="">Image</label>
      <input  class="form-control"  type="file" name="image" id="" class="form-control" placeholder="Image" >
    </div>
    <div class="form-group">
      <label for="">Description (optional)</label>
      <input  class="form-control"  type="text" name="description" id="" class="form-control" placeholder="Description">
    </div>

    <label for="">Select category</label>
    <select class="custom-select" name="category">
  <option>Open this select </option>
  @foreach($categories as $cat)
  <option value="{{$cat->id}}">{{$cat->name}}</option>
  @endforeach
</select>

    <button type="submit" class="btn btn-success"> Submit</button>
   
  
</form>

@endsection()