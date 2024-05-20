@extends('layouts.admin')
@section('title', 'Add Category')
@section('main')
<h2>Thêm danh mục</h2>
<form action="{{route('category.store')}}" method="POST" role="form">
	@csrf @method("POST")
	<div class="form-group">
		<label for="">Tên danh mục</label>
		<input type="text" name="name" class="form-control" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection