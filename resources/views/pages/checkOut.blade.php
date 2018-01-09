@extends('layouts.main')

@section('title','|  Checkout')

@section('content')

<h1 class="text-white col-sm-4 offset-sm-1">Checkout</h1>
<hr>
<div class="col-sm-4 offset-sm-1 text-white">
   <div>
      <form class="" action="#" method="POST" id="payment-form">
         {{ csrf_field() }}
         <h4 style="margin-bottom:20px">Billing Details</h4>

         <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
         </div>

         <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
         </div>

         <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}" required>
         </div>

         <div class="row form-group">
                 <div class="col-sm-5 form-group">
                     <label for="city">City</label>
                     <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                 </div>
                 <div class="form-group">
                     <label for="state">State</label>
                     <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
                 </div>
         </div> <!-- end row -->

             <div class="row form-group">
                 <div class="col-sm-5 form-group">
                     <label for="zipcode">Zip Code</label>
                     <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ old('zipcode') }}" required>
                 </div>
                 <div class="form-group">
                     <label for="phone">Phone</label>
                     <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                 </div>
             </div><!-- end half-form -->

    <div class="spacer"></div>

             <h4 style="margin-bottom:20px">Payment Details</h4>

             <div class="form-group">
                 <label for="name_on_card">Name on Card</label>
                 <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
             </div>

                <div class="form-row ">
                   <label for="card-element" style="">
                     Credit or debit card
                   </label>
                   <div id="card-element">
                     <!-- a Stripe Element will be inserted here. -->
                   </div>

                   <!-- Used to display form errors -->
                   <div id="card-errors" role="alert"></div>
                  </div>

                  <button>Submit Payment</button>
      </form>
   </div>
</div>

@endsection
