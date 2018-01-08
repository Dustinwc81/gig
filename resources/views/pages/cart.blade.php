@extends('layouts.main')

@section('title', '|  Shopping Cart')

@section('content')


               @if (session()->has('success_message'))
                   <div class="alert alert-success">
                       {{ session()->get('success_message') }}
                   </div>
               @endif

               @if(count($errors) > 0)
                   <div class="alert alert-danger">
                       <ul>
                           @foreach ($errors->all() as $error)
                               <li>{{ $error }}</li>
                           @endforeach
                       </ul>
                   </div>
               @endif

               @if (Cart::count() > 0)

            <h3 class="text-white">{{ Cart::count() }} item(s) in Shopping Cart</h3>

<div class="col-sm-8 offset-2 text-white">
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

         @foreach (Cart::content() as $item)
         <tr>
            <th scope="row">{{ $item->model->name }}</th>
            <td class="table-description">{{ $item->model->details }}</td>
            <td>Large</td>
            <td>1</td>
            <td>
               <div class="row">
                  <div class="col-sm-6 offset-sm-3 table-condensed">
                  {{--   <a class="text-white" href="#">Remove</a><br> --}}
                  <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                     {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                     <button type="submit" class="btn btn-link text-white">Remove</button>
                  </form>
                  </div>
            </td>
            <td>${{ $item->model->price /100}}</td>
         </tr>
         @endforeach

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

@else

   <h3 class="text-white" style="padding-bottom:20px">No Items in Cart!</h3>
   <a href="/" class="btn btn-light">Continue Shopping</a>

@endif


@endsection
