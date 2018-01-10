@extends('layouts.main')

@section('title','|  Checkout')

@section('content')

<h2 class="text-white col-sm-4 offset-sm-1">Checkout</h2>
<hr>
<div class="row">
<div class="col-sm-4 offset-sm-1 text-white">
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


             <h4 style="margin-bottom:20px">Payment Details</h4>

             <form action="/your-server-side-code" method="POST">
            <script
              src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
              data-amount="2000"
              data-name="Stripe.com"
              data-description="2 widgets"
              data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
              data-locale="auto"
              data-zip-code="true">
            </script>
            </form>
      </form>
</div> <!-- col-sm-4 offset-sm-1 -->





<div class="col-sm-4 offset-sm-1 text-white">
   <h4 style="margin-bottom:20px">Your Order</h4>
      <table class="table">
         <thead class="table-condensed">
            <tr>
               <th scope="col text-center">Product</th>
               <th scope="col text-center">Description</th>
               <th scope="col">Size(if applicable)</th>
               <th scope="col">Quantity</th>
               <th scope="col">Price</th>
            </tr>
         </thead>
         <tbody>
            @foreach (Cart::content() as $item)
            <tr>
               <td>{{ $item->model->name }}</td>
               <td>{{ $item->model->details}}</td>
               <td>Size</td>
               <td>{{ $item->qty }}</td>
               <td>{{ moneyFormat($item->model->price/100, 'USD') }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <hr class"text-white">

   <div class="row bg-light text-dark">
      <div class="col-sm-4 offset-1 text-center">
            Subtotal: <br>
            Tax: <br>
            Total:
      </div>

      <div class="col-sm-4 offset-1 text-center">
            {{ moneyFormat(Cart::subtotal()/100, 'USD') }} <br>
            {{ moneyFormat(Cart::tax()/100, 'USD') }}<br>
            {{ moneyFormat(Cart::total()/100, 'USD') }}
      </div>
   </div>
   </div><!-- col-sm-4 offset-sm-1 -->
</div><!-- row -->


@endsection
