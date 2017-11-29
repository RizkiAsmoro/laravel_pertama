@extends('layout2')

@section ('content')


<div class="container">
<div class="row">
<div class="col-md-6">
<h1>Product Discount</h1>
<form class="form">

    <div class="form-group">
    <label for="product_name">Nama Product</label>
    <input type="text" class="form-control" id="product_name" name="product_name"  placeholder="product name">
    </div>

    <div class="form-group">
    <label for="product_price">Harga Product</label>
    <input type="text" class="form-control" id="product_price" name="product_price"  placeholder="product price">
    </div>

    <div class="form-group">
    <label for="product_discount">Discount Product</label>
    <div class="input-group">
    <input type="text" class="form-control" id="product_discount" name="product_discount"  placeholder="product discount">
    <span class="input-group-addon" id="basic-addon2">%</span>
    </div>
    </div>

    <div class="form-group">
    <button class="btn btn-primary" type="submit">Submit</button>
    </div>

</form>
</div>
<div class="col-md-6">
    <h2>Output</h2>
<div class="row">
    <div class="col-md-6">
    product name
    </div>
<div class="col-md-6">
    : {{$productName}} 
    </div>
</div>

<div class="row">
    <div class="col-md-6">
    product price
    </div>
<div class="col-md-6">
    : Rp {{$productPrice}} 
    </div>
</div>

<div class="row">
    <div class="col-md-6">
    product discount
    </div>
<div class="col-md-6">
    : {{$productDiscount}} %
    </div>
</div>

<div class="row">
    <div class="col-md-6">
    Total Payment
    </div>
<div class="col-md-6">
    : Rp {{$payment}} 
    </div>
</div>

</div>
</div>
</div>

@endsection

































