
@extends('admin.layout.admin')

@section('content')

 @if(!empty($products))
<section>
	<h3>Product</h3>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Product Name</th>
			<th>Size</th>
			<th>Category</th>
			<th>price</th>
			<th>Image</th>
		</tr>
	</thead>
	<tbody>
		@forelse($products as $product)
		<tr>
			<td style="text-align: left;">{{$product->name}}</td>
			<td style="text-align: left;">{{$product->size}}</td>
			<td style="text-align: left;max-width: 120px">{{$product->category->name}}</td>
			<td style="text-align: left;">$ {{$product->price}}</td>
			<td><div style="width:50px; "><img src="/storage/images/{{$product->image}}" style="width:70%; height: auto; max-width: 70%; " /></div>
				<td>
				<form action="{{route('product.destroy',$product->id)}}" method="POST">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<input type="submit" class="btn btn-danger" value="Delete">	
				</form>	
				</td></td>
		</tr> 
		@empty
		<tr>
			<td>No Data</td>
		</tr>
		@endforelse
	</tbody>
</table>
</section>
@endif
@endsection
