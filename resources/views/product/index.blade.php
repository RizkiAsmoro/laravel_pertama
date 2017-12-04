@extends('layout2')

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<table class="table table-striped table-dark">

<div class="btn-group" role="group" aria-label="...">
  <button type="button" class="btn btn-default">Add Product</button>
</div>

  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">rating</th>
    </tr>
  </thead>
  @foreach ($products as $product)
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>{{$product->id}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->price}}</td>
      <td>{{$product->rating}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>

@endsection
