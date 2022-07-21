@extends('master')

@section('content')
<h3>Product list</h3>
<table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Category </th>
            <th scope="col">Description</th>

        </tr>
    </thead>
    <tbody>
        @foreach($productdata as $data)

        <tr>


            <td>{{$data->id}}</td>
            <td>{{$data->product_name}}</td>
            <td>{{$data->product_price}}</td>
            <td>{{$data->product_quantity}}</td>
            <td>{{$data->category->name}}</td>
            <td>{{$data->product_description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$productdata->links()}}

<a class="btn btn-success" href="{{route('product.form')}}">Product create</a>

@endsection('content')
