@extends('layouts.main')

@section('title', '|  Apparel')

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

      <div class="row">
         <div class="col-sm-6">
            <select class="custom-select" id="inputGroupSelect01">
               <option selected>Select Size</option>
               <option value="1">XSmall</option>
               <option value="2">Small</option>
               <option value="3">Medium</option>
               <option value="1">Large</option>
               <option value="2">XLarge</option>
               <option value="3">XXLarge</option>
               <option value="3">XXXLarge</option>
            </select>
         </div>

         <div class="col-sm-6">
            <select class="custom-select" id="inputGroupSelect01">
               <option selected>Select Quantity</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="1">4</option>
                  <option value="2">5</option>
                  <option value="3">6</option>
                  <option value="3">7</option>
                  <option value="2">8</option>
                  <option value="3">9</option>
                  <option value="3">10</option>
            </select>
         </div>
      </div><!-- select button div row -->
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
