@extends('layouts.main')

@section('title', 'JH2 Gigs |  Shopping Cart')

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

<div class="row">
<div class="col-sm-8 offset-sm-2 text-white table-responsive">
<hr>
   <table class="table text-white">
      <thead class="table-condensed">
         <tr>
            <th scope="col text-center">Product</th>
            <th scope="col text-center">Description</th>
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

   <div class="row">
      <div class="col-sm-6" style="padding-top:10px">
         <a class="btn btn-light" href="{{ route('shop.index') }}" role="button">Continue Shopping</a>
      </div>
      <div class="col-sm-6 spacer" style="padding-top:10px">
         <a class="btn btn-success" href="{{ route('checkout.index') }}" role="button">Proceed to Checkout</a>
      </div>
   </div>
</div>
</div>

@else

   <h3 class="text-white spacer">No Items in Cart!</h3>
   <a href="{{ route('shop.index') }}" class="btn btn-light">Continue Shopping</a>
   <div class="spacer"></div>

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


@endsection
