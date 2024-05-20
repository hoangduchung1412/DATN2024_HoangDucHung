@extends('layouts.admin')
@section('title', 'Add User')
@section('main')
<h2>Thêm tài khoản</h2>
<form action="{{route('user.store')}}" method="POST" role="form">
	@csrf @method("POST")
	<div class="form-group">
		<label for="">Name</label>
		<input type="text" name="name" class="form-control" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Email</label>
		<input type="text" name="email" class="form-control" placeholder="Input field">
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Input field">
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection