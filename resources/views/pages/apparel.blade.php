@extends('layouts.main')

@section('title', 'Apparel')

@section('content')

<div class="row text-white" style="padding-top:100px">

   @foreach ($products as $product)

   <div class="col-sm-4">
         <img src="{{ URL::asset('images/shirt.jpg')}}" class="img-fluid" alt="Responsive image">

         <a class="text-white"><h2>{{ $product->name }}</h2></a>
         <h6 class="text-secondary">SHIRT-
            {{ moneyFormat($product ->price/100, 'USD') }}</h6>
         <p>{{ $product->description }}</p>
      <hr>
      <hr>
         <form action="{{ route('cart.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=" {{ $product->id }}">
            <input type="hidden" name="name" value=" {{ $product->name }}">
            <input type="hidden" name="price" value=" {{ $product->price }}">
            <button type="submit" class="btn btn-secondary">Add to Cart</button>
         </form>
   </div> <!-- col div -->

   @endforeach

</div> <!-- row div -->

@endsection
