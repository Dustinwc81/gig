@extends('layouts.main')

@section('title','|  Checkout')

@section('content')

   @if (session() -> has('success_message'))
      <div class="spacer"></div>
         <div class="alert alert-success">
            {{ session()->get('success_message') }}
         </div>
         @endif

         @if (count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
               <ul>
                  @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                  @endforeach
               </ul>
            </div>
         @endif

<h2 class="text-white col-sm-4 offset-sm-1">Checkout</h2>
<hr>
<div class="row">
<div class="col-sm-5 offset-sm-1 text-white">
      <form class="" action="{{ route('checkout.store') }}" method="POST" id="payment-form">
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
                 <div class="col-sm-5 offset-sm-2 form-group">
                     <label for="city">City</label>
                     <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                 </div>
                 <div class="form-group">
                     <label for="state">State</label>
                     <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
                 </div>
         </div> <!-- end row -->

             <div class="row form-group">
                 <div class="col-sm-5 offset-sm-2 form-group">
                     <label for="zipcode">Zip Code</label>
                     <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ old('zipcode') }}" required>
                 </div>
                 <div class="form-group">
                     <label for="phone">Phone</label>
                     <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                 </div>
             </div><!-- end half-form -->


             <h4 style="margin-bottom:20px">Payment Details</h4>

             <div class="form-control">
                <label for="name_on_card">Name on Card</label>
                <input type="text" class="form-control" name="name_on_card" value="">
             </div>

             <div class="form-group">
                <label for="card-element">
                      Credit or debit card
                    </label>
                    <div id="card-element">
                      <!-- a Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors -->
                    <div id="card-errors" role="alert"></div>
                     <button type="submit" class="btn btn-primary btn-block" id="complete-order" style="margin-top:16px">Complete Order</button>
             </div>


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
               <td>{{ moneyFormat($item->subtotal/100, 'USD') }}</td>
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
