@extends('layouts.admin')
@section('title', 'Category List')
@section('main')

<form action="" class="form-inline" role="form">
	<div class="form-group">
		<input type="" name="key" class="form-control" placeholder="Search By Name">
	</div>
	<button type="submit" class="btn btn-primary">
		<i class="fas fa-search"></i>
	</button>
</form>

<a href="{{route('category.create')}}" class="btn btn-success" style="margin: 20px 0;">Thêm danh mục</a>
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Total Posts</th>
			<th>Created Date</th>
			<th class="text-right">Actions</th>
		</tr>
	</thead>
	<tbody>
	@foreach($data as $rows)
		<tr>
			<td>{{ $rows->id }}</td>
			<td>{{ $rows->name }}</td>
			<td>{{ $rows->posts ? $rows->posts->count() : 0 }}</td>
			<td>{{ $rows->created_at->format('m-d-Y') }}</td>
			<td class="text-right">
			
				<a href="{{route('category.edit',$rows->id)}}" class="btn btn-sm btn-success">
					<i class="fas fa-edit"></i>
				</a>
				<a href="{{route('category.destroy',$rows->id)}}" class="btn btn-sm btn-danger btndelete">
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