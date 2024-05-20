@extends('layouts.admin')
@section('title', 'Edit Category')
@section('main')
<h2>Sửa danh mục</h2>
<form action="{{route('category.update', $category->id)}}" method="POST" role="form">
	@csrf @method("PUT")
	<div class="form-group">
		<label for="">Tên danh mục</label>
		<input type="text" value="{{$category->name}}" name="name" class="form-control" placeholder="Input field">
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary" style="margin: 20px 0;">Submit</button>
	</div>
</form>
@endsection