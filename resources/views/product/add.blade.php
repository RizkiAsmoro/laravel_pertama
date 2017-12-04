@extends('layout2')
@section('content')

    <div class="container">
    <div class="row">
    
    @if($success)
    <div class="alert alert-success" role="alert">Berhasil ditambah</div>
    @endif
    <form class="form" method="POST">
    <div class="form-group">
        <label for="product_name">Nama Product</label>
        <input type="text" class="form-control" id="product_name" name="product_name"  placeholder="product name">
    </div>
    <div class="form-group">
        <label for="product_price">Price Product</label>
        <input type="text" class="form-control" id="product_price" name="product_price"  placeholder="product price">
    </div>
    <div class="form-group">
        <label for="product_rating">Rating Product</label>
        <input type="text" class="form-control" id="product_rating" name="product_rating"  placeholder="product rating">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-small">Submit</button>
    </div>
    </form>
    </div>
    </div>
    @endsection
