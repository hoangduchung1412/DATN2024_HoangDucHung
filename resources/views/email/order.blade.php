<h2>Xin chào {{$c_name}}</h2>
<p>
	<b>Bạn đã đặt hàng thành công</b>
</p>
<h4>Thông tin đơn hàng của bạn</h4>
<h4>Mã đơn hàng: {{$order->id}}</h4>
<h4>Ngày đặt: {{$order->order_date}}</h4>

<h4>Chi tiết đơn hàng</h4>
<table border="1" cellpadding="10" cellspacing="0" width="400">
	<thead>
		<tr>
			<th>STT</th>
			<th>Tên sản phẩm</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Thành tiền</th>
		</tr>
	</thead>
	<tbody>
	<?php $n = 1; ?>
	@foreach($items as $key => $item)
		<tr>
			<td>{{$n}}</td>
			<td>{{$item->name}}</td>
			<td>{{$item->price}}</td>
			<td>
				{{$item->quantity}}
			</td>
			<td>
				{{$item->price * $item->quantity}}
			</td>
		</tr>
	<?php $n++; ?>
	@endforeach
	</tbody>
</table>