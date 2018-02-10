@extends('layouts.main')

@section('title','JH2 Gigs |  Checkout')

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

<div class="row">
<div class="col-sm-5 text-center text-white">
   <h2 class="spacer">Checkout</h2>
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
                 <div class="col-sm-4 offset-sm-1">
                     <label for="city">City</label>
                     <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                  </div>
                  <div class="col-sm-4 offset-sm-1">
                     <label for="state">State</label>
                     <input type="text" class="form-control" id="state" name="state" value="{{ old('state') }}" required>
                  </div>
         </div> <!-- end row -->

             <div class="row form-group">
                 <div class="col-sm-4 offset-sm-1">
                     <label for="zipcode">Zip Code</label>
                     <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ old('zipcode') }}" required>
                 </div>
                 <div class="col-sm-4 offset-sm-1">
                     <label for="phone">Phone</label>
                     <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                 </div>
             </div><!-- end row -->


             <h4 style="margin-bottom:20px">Payment Details</h4>

             <div class="form-group">
                <label for="name_on_card">Name on Card</label>
                <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
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
             </div>
                     <button type="submit" class="btn btn-primary btn-block" id="complete-order" style="margin-top:16px">Complete Order</button>


      </form>
</div> <!-- col-sm-4 offset-sm-1 -->





<div class="col-sm-6 offset-sm-1 text-white table-responsive">
   <h4 class="spacer">Your Order</h4>
      <table class="table text-white">
         <thead class="table-condensed">
            <tr>
               <th scope="col text-center">Product</th>
               <th scope="col text-center">Description</th>
               {{-- <th scope="col">Size(if applicable)</th> --}}
               <th scope="col">Quantity</th>
               <th scope="col">Price</th>
            </tr>
         </thead>
         <tbody>
            @foreach (Cart::content() as $item)
            <tr>
               <td>{{ $item->model->name }}</td>
               <td>{{ $item->model->details}}</td>
               {{-- <td>{{ $item->size }}</td> --}}
               <td>{{ $item->qty }}</td>
               <td>{{ moneyFormat($item->subtotal/100, 'USD') }}</td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="top-spacer-60"></div>

    <div class="clearfix">
        <p class="pull-left">Subtotal:</p>
        <p class="pull-right">{{ moneyFormat(Cart::subtotal()/100, 'USD') }}</p>
    </div>
    <div class="clearfix">
        <p class="pull-left">Tax:</p>
        <p class="pull-right">{{ moneyFormat(Cart::tax()/100, 'USD') }}</p>
    </div>
    <div class="clearfix">
        <p class="pull-left h4">Total:</p>
        <p class="pull-right">{{ moneyFormat(Cart::total()/100, 'USD') }}</p>
    </div>

</div>

</div>


<script>

(function(){

     var stripe = Stripe('pk_live_XRfZwsCmF50laMmrvrJDou3o');//Live
     // var stripe = Stripe('pk_test_R1WpTmVCiad3bav8oLYtHdDN');//Test

     // Create an instance of Elements
     var elements = stripe.elements();

     // Custom styling can be passed to options when creating an Element.
     // (Note that this demo uses a wider set of styles than the guide below.)
     var style = {
      base: {
         color: '#32325d',
         // lineHeight: '18px',
         fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
         fontSmoothing: 'antialiased',
         fontSize: '16px',
         '::placeholder': {
           color: '#aab7c4'
         }
      },
      invalid: {
         color: '#fa755a',
         iconColor: '#fa755a'
      }
     };

     // Create an instance of the card Element
     var card = elements.create('card', {
        style: style,
        hidePostalCode: true
        });

     // Add an instance of the card Element into the `card-element` <div>
     card.mount('#card-element');

     // Handle real-time validation errors from the card Element.
     card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
         displayError.textContent = event.error.message;
      } else {
         displayError.textContent = '';
      }
});

     // Handle form submission
   var form = document.getElementById('payment-form');
     form.addEventListener('submit', function(event) {
      event.preventDefault();

      //Disable the submit button to prevent repeated clicks
      document.getElementById('complete-order').disabled = true;

      var options = {
          name: document.getElementById('name_on_card').value,
          address_line1: document.getElementById('address').value,
          address_city: document.getElementById('city').value,
          address_state: document.getElementById('state').value,
          address_zip: document.getElementById('zipcode').value,
      }

      stripe.createToken(card, options).then(function(result) {
         if (result.error) {
           // Inform the user if there was an error
           var errorElement = document.getElementById('card-errors');
           errorElement.textContent = result.error.message;

           // Enable the submit button
           document.getElementById('complete-order').disabled = true;
         } else {
           // Send the token to your server
           stripeTokenHandler(result.token);
         }
      });
     });

              function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                 form.submit();
              }
})();

</script>

@endsection
