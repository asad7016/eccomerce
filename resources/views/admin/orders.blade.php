@extends('admin.layout.admin')
@section('content')
<section>
	<h3>Orders</h3>
	<hr>
		@foreach($orders as $order)
<ul>
			<li>
			<h4>Order By : {{$order->user->name}}</h4>
			<h5>Total Amount(tax included): ${{$order->total}}</h5>
			<form action="{{route('toggle.deliver',$order->id)}}" method="POST" class="pull-right" id="deliver-toggle">
				{{csrf_field()}}
				<label for="delivered">Delivered</label>
				<input type="checkbox" value="1" name="delivered" {{$order->delivered==1?"checked":""}}>
				<input type="submit" class="button" value="submit">
			</form>
<table class="table table-bordered">
	
	<thead>
		<tr>
			<th><center>Name</center></th>
			<th><center>qty</center></th>
			<th><center>price</center></th>
	
		</tr>
	</thead>
	<tbody>
		@foreach($order->OrderItems as $item)
		<tr>
			<td>{{$item->name}}</td>
			<td>{{$item->pivot->qty}}</td>
			<td>$ {{$item->pivot->total}}</td>
			
		</tr> 
		@endforeach
	</tbody>
</table>
</li>
</ul>
@endforeach

</section>
@endsection