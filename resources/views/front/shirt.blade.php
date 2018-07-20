@extends('layout.main')

@section('content')
 <!-- products listing -->
        <!-- Latest SHirts -->
                <div class="row">
            <div class="small-5 small-offset-1 columns">
                <div class="item-wrapper">
                    <div class="img-wrapper">
                        <a href="#">
                            <center>
                             <img style="max-height: 400px;max-width: auto; height: auto;width: auto" src="/storage/images/{{$shirts->image}}"/>
                        </a></center>
                    </div>
                </div>
            </div>
            <div class="small-6 columns">
                <div class="item-wrapper">
                    <h2>
                       {{$shirts->name}}</h2>
                       <span class="price-tag">$ {{$shirts->price}}</span> 
                   
                    <div class="row">
                        <div class="large-12 columns">
                            <label>
                                Select Size
                                <select>
                                    <option value="small">
                                        Small
                                    </option>
                                    <option value="medium">
                                        Medium
                                    </option>
                                    <option value="large">
                                        Large
                                    </option>
                                   
                                </select>
                            </label>
                            <a  href="{{route('cart.addItem',$shirts->id)}}" class="button  expanded">Add to Cart</a>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>
    </div>
<br>
<div class="row">
<div class="small-12 columns">
                <div class="item-wrapper">

    <h3>Description :</h3>
    <hr>
    <p style="font-size: 18px">{{$shirts->description}}</p>
</div>    
</div></div>
<br>
@endsection