@extends('layout.main')

@section('content')
<!-- products listing -->
         <!-- Latest SHirts -->
        <div class="row">
            
        @forelse($shirts as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                       <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
                           <img style="max-height: 250px; max-width: auto;" src="/storage/images/{{$shirt->image}}"/>
                        </a>
                    </div>
                      <a href="{{route('shirt',$shirt->id)}}">
                        <h3>
                            <center>{{$shirt->name}}</center>  
                        </h3>
                    </a>
                    <h5>
                       
                        <center>${{$shirt->price}}</center>
                    </h5>
                    <p style="overflow: hidden; max-height: 20px">
                        {{$shirt->description}}
                    </p>
                </div>
            </div>
            @empty
            <h3>No Shirts</h3>
            @endforelse
        </div>
<br>
@endsection
