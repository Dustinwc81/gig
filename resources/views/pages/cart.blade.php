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
   <table class="table text-white">
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
            <td>{{ $item->model->name }}</td>
            <td>{{ $item->model->details }}</td>

            <td>

               <select class="size" shirt-id="{{ $item->rowId }}">
                  <option selected>Size</option>
                  <option> XSmall </option>
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                  <option>XLarge</option>
                  <option>XXLarge</option>
                  <option>XXXLarge</option>
               </select>
            </td>

            <td>
               <select class="quantity" data-id="{{ $item->rowId }}">
                  @for ($i=1; $i < 10 + 1; $i++)
                     <option {{ $item->qty == $i ? 'selected' : ''}}>{{ $i }}</option>
                  @endfor
               </select>

            </td>
            <td>
                  <form class="text-center" action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                     {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                     <button type="submit" class="btn btn-link text-white">Remove</button>
                  </form>

            </td>
            <td>{{ moneyFormat($item->subtotal/100, 'USD') }}</td>
         </tr>
         @endforeach

      </tbody>
   </table>

   <div class="row" style="padding-top:50px">
      <div class="col-sm-6">
         <p>Shipping is currently free, enjoy</p>
      </div>
      <div class="col-sm-5 text-right">
         <p>Subtotal: {{ moneyFormat(Cart::subtotal()/100, 'USD') }} <br>
            Tax (8%): {{ moneyFormat(Cart::tax()/100, 'USD') }} <br>
            Total: {{ moneyFormat(Cart::total()/100, 'USD') }}
         </p>
      </div>
   </div>

   <div class="row" style="padding-top:50px">
      <div class="col-sm-6">
         <a class="btn btn-light" href="/" role="button">Continue Shopping</a>
      </div>
      <div class="col-sm-6">
         <a class="btn btn-success" href="{{ route('checkout.index') }}" role="button">Proceed to Checkout</a>
      </div>
   </div>
</div>

@else

   <h3 class="text-white" style="padding-bottom:20px">No Items in Cart!</h3>
   <a href="/" class="btn btn-light">Continue Shopping</a>

@endif

{{-- JS for updating the Quantity in the Cart --}}

<script>
    (function(){
        const classname = document.querySelectorAll('.quantity')
        Array.from(classname).forEach(function(element) {
            element.addEventListener('change', function() {
                const id = element.getAttribute('data-id')
                axios.patch(`/cart/${id}`, {
                    quantity: this.value
                })
                .then(function (response) {
                    // console.log(response);
                    window.location.href = '{{ route('cart.index') }}'
                })
                .catch(function (error) {
                    // console.log(error);
                    window.location.href = '{{ route('cart.index') }}'
                });
            })
        })
    })();
</script>

{{-- JS for updating the Shirt sizes --}}

{{-- <script>
   (function(){
      const classname = document.querySelectorAll('.size')
      Array.from(classname).forEach(function(element) {
         element.addEventListener('change', function() {

            const id = element.getAttribute('shirt-id')
            axios.patch(`/cart/${id}`, {
                size: this.value
              })
              .then(function (response) {
                console.log(response);
                 window.location.href = '{{ route('cart.index') }}'
              })
              .catch(function (error) {
                console.log(error);
                 window.location.href = '{{ route('cart.index') }}'
              });
         })
      })
   })();
</script> --}}

@endsection
