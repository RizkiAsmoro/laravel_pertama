@extends('layout2')
@section('content')

    <div class="container">
    <div class="row">

    <h1>Upload file</h1>
    @if($success)
    <div class="alert alert-success" role="alert">Berhasil ditambah</div>
    @endif
    <form class="form" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Main Picture</label>
        <input type="file" name="mainpicture">    
     </div>

    <form class="form" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Main Galery</label>
        <input type="file" name="gallery[]" multiple="multiple">    
     </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-small">Submit</button>
        <a href="/media" class="btn btn-small btn-success">Back to list</a>
    </div>
    </form>
    </div>
    </div>
    @endsection
