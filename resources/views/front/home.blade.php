@extends('layout.main')

@section('content')

        <section class="hero text-center">
            <br/>
            <br/>
            <br/>
            <br/>
            <h2 >
                <strong>
                    Hey! Welcome to MC- Mykey's Store
                </strong>
            </h2>
            <br>
            <a href="{{url('shirts')}}"><button class="button large">Check out My Clothes</button></a>
        </section>
        <br/>
        <div class="subheader text-center">
             <h2>
            MyKey&rsquo;s Latest Clothes
        </h2>
        </div>
       
        <!-- Latest SHirts -->
        <div class="row">
         @forelse($shirts->chunk(4) as $chunk)
         @foreach($chunk as $shirt)
            <div class="small-3 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="{{route('cart.addItem',$shirt->id)}}" class="button expanded add-to-cart">
                            Add to Cart
                        </a>
                        <a href="#">
         <img style="max-height: 250px; max-width: auto;" src="/storage/images/{{$shirt->image}}"  />
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
          @endforeach
          @empty
            <h3>No Shirts</h3>

            @endforelse
        </div>
        <!-- Footer -->
        <br>
@endsection