@extends('cms.templates.master')
@section('body')
<div class="container">
	{{ Form::open(array('url' => 'stadnitzki/add', 'enctype' => 'multipart/form-data')) }}
	  <div class="form-group">
	    <label for="product name">Product Name:</label>
	    <input type="text" class="form-control" placeholder="Product Name" name="name" required>
	  </div>
	  <div class="form-group">
	    <label for="product description">Description:</label>
	    <input type="text" class="form-control" placeholder="Description" name="desc" required>
	  </div>
	  <div class="form-group">
	    <label for="price">Price:</label>
	    <input type="number" class="form-control" placeholder="Price" name="price" required>
	  </div>
	  <div class="form-group">
	    {{ Form::file('image', ['class' => 'form-control-file', 'required']) }}
	  </div>
	  {{ Form::submit('Submit' ,['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
</div>
@endsection