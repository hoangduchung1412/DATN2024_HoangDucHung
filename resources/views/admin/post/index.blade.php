@extends('layouts.admin')
@section('title', 'Post List')
@section('main')

<form action="" class="form-inline" role="form">
	<div class="form-group">
		<input type="" name="key" class="form-control" placeholder="Search By Name">
	</div>
	<button type="submit" class="btn btn-primary">
		<i class="fas fa-search"></i>
	</button>
</form>

<a href="{{route('post.create')}}" class="btn btn-success" style="margin: 20px 0;">Thêm bài viết</a>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Category</th>
			<th>Description</th>
			<th>Content</th>
			<th>Status</th>
			<th>Image</th>
			<th class="text-right">Actions</th>
		</tr>
	</thead>
	<tbody>
	@foreach($data as $rows)
		<tr>
			<td>{{ $rows->id }}</td>
			<td>{{ $rows->title }}</td>
			<td>{{ $rows->category ? $rows->category->name : "" }}</td>
			<td class="des">{{ $rows->description }}</th>
			<td style="overflow: hidden; text-overflow: ellipsis; -webkit-line-clamp: 4; display: -webkit-box; -webkit-box-orient: vertical; width: 300px;">{{ $rows->content }}</th>
			<td>
				@if($rows->status==0)
					<span class="badge badge-danger">Private</span>
				@else
					<span class="badge badge-success">Publish</span>
				@endif
			</td>
			
			<td>
                <img src="{{ $rows->image }}" width="60px">
			</td>
			
			<td class="text-right" style="display: flex;">
				<a href="{{route('post.edit',$rows->id)}}" class="btn btn-sm btn-success">
					<i class="fas fa-edit"></i>
				</a>
				<a href="{{route('post.destroy',$rows->id)}}" class="btn btn-sm btn-danger btndelete">
					<i class="fas fa-trash"></i>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
<form method="POST" action="" id="form-delete">
	@csrf @method('DELETE')
</form>
<hr>
<div class="">
	{{$data->appends(request()->all())->links()}}
</div>
@endsection
@section('js')
<script type="text/javascript">
	$('.btndelete').click(function(ev){
		ev.preventDefault();
		var _href = $(this).attr('href');
		$('form#form-delete').attr('action', _href);
		if(confirm("Bạn có chắc chắn muốn xoá không?")) {
			$('form#form-delete').submit();	
		}	
	})
</script>
@endsection