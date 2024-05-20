@extends('layouts.admin')
@section('title', 'Comment List')
@section('main')

<form action="" class="form-inline" role="form">
	<div class="form-group">
		<input type="" name="key" class="form-control" placeholder="Search By Name">
	</div>
	<button type="submit" class="btn btn-primary">
		<i class="fas fa-search"></i>
	</button>
</form>

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>User Name</th>
			<th>Post</th>
			<th>Comment</th>
			<th>Created Date</th>
			<th class="text-right">Actions</th>
		</tr>
	</thead>
	<tbody>
	@foreach($data as $rows)
		<tr>
			<td>{{ $rows->id }}</td>
			<td>{{ $rows->user ? $rows->user->name : "" }}</td>
			<td>{{ $rows->post ? $rows->post->title : "" }}</td>
			<td>{{ $rows->comment }}</td>
			<td>{{ $rows->created_at->format('d/m/Y') }}</td>
			<td class="text-right" style="display: flex;">
				<a href="{{route('comment.destroy',$rows->id)}}" class="btn btn-sm btn-danger btndelete">
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