@extends('layouts.admin')
@section('title', 'Add Account')
@section('main')
<h2>Thêm danh mục</h2>
<form action="{{route('account.store')}}" method="POST" role="form">
	@csrf @method("POST")
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" name="name" class="form-control" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email" class="form-control" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Phone</label>
		<input type="text" name="phone" class="form-control" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Address</label>
		<input type="text" name="address" class="form-control" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection