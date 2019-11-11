@extends('master')
@section('main')
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Image</th>
					<th>id_cate</th>
					<th>Price</th>
					<th>SalePrice</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($product as $value)
				<tr>
					<td>{{$value->id}}</td>
					<td>{{$value->name}}</td>
					<td>{{$value->image}}</td>
					<td>{{$value->id_cate}}</td>
					<td>{{$value->price}}</td>
					<td>{{$value->sale_price}}</td>
					<td>{{($value->status==1)?'Hiện':'Ẩn'}}</td>
					
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	@stop
		