@extends('layout.main')

@section('content')
<br>
 <form action="{{route('payment.store')}}" method="post" id="payment-form">
    {{csrf_field()}}
  <div class="form-row">
    <div class="small-6 small-centered columns">
    <label for="card-element">
      Credit or debit card
    </label>
    <br>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
<br>
  <button type="Submit" class="button success">Submit Payment</button>
  </div>
</div>
</form>

@endsection
