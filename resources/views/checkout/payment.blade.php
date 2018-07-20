@extends('layout.main')

@section('content')
<div class="row">
<div class="small-6 small-centered columns">
    <br>
    <h5>Shipping info</h5>
  
   <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'address.store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}

            <div class="form-group">
                {{ Form::label('address line', 'Address line') }}
                {{ Form::text('address line', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>
 <div class="form-group">
                {{ Form::label('state', 'State') }}
                {{ Form::text('state', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('zip', 'zip') }}
                {{ Form::text('zip', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>
 <div class="form-group">
                {{ Form::label('country', 'country') }}
                {{ Form::text('country', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

<div class="form-group">
                {{ Form::label('phone', 'phone') }}
                {{ Form::text('phone', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>
             {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }}
            {!! Form::close() !!}
            <br>
</div>
</div></div>
@endsection