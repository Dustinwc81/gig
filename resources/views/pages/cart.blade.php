@extends('layouts.main')

@section('title', '|  Shopping Cart')

@section('content')

<div class="col-sm-8 offset-2 text-white">
   <h5>2 Item(s) in Shopping Cart</h5>
<hr>
   <table class="table">
      <thead class="table-condensed">
         <tr>
            <th scope="col text-center">Product</th>
            <th scope="col text-center">Description</th>
            <th scope="col">Size(if applicable)</th>
            <th scope="col">Quantity</th>
            <th scope="col">Remove Item</th>
            <th scope="col">Unit Price</th>
         </tr>
      </thead>

      <tbody>

         <tr>
            <th scope="row">JH2 Shirt</th>
            <td class="table-description">Black, Cotton</td>
            <td>Large</td>
            <td>1</td>
            <td>
               <div class="row">
                  <div class="col-sm-6 offset-sm-3 table-condensed">
                     <a class="text-white" href="#">Remove</a><br>
                  </div>
            </td>
            <td>$14.99</td>
         </tr>

         <tr>
            <th scope="row">JH2 SockHat</th>
            <td class="table-description">Black, Cotton</td>
            <td></td>
            <td>1</td>
            <td>
               <div class="row">
                  <div class="col-sm-6 offset-sm-3 table-condensed">
                     <a class="text-white" href="#">Remove</a><br>
                  </div>
            </td>
            <td>$14.99</td>
         </tr>

      </tbody>
   </table>

   <div class="row" style="padding-top:50px">
      <div class="col-sm-6">
         <p>Shipping is currently free, enjoy</p>
      </div>
      <div class="col-sm-5 text-right">
         <p>Subtotal:   $29.98 <br>
                 Tax:   $5.00 <br>
               Total:   $34.99
         </p>
      </div>
   </div>

   <div class="row" style="padding-top:50px">
      <div class="col-sm-6">
         <a class="btn btn-light" href="/" role="button">Continue Shopping</a>
      </div>
      <div class="col-sm-6">
         <a class="btn btn-success" href="/checkOut" role="button">Proceed to Checkout</a>
      </div>
   </div>
</div>


@endsection
