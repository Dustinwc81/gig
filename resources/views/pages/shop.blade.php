@extends('layouts.main')

@section('title', '3 Prong Gigs, 2 Prong Gigs, Spears For Sale')
@section('description', 'Hand made fishing gigs, frogging gigs, and flounder gigs.  Spears, 2 prong gigs, and 3 prong gigs.')

@section('content')

<div class="row spacer text-white">
      <div class="col-md-4 offset-md-4">
          <h2 class="spacer"><strong>JH2 EQUIPMENT</strong></h2>
      </div>
</div>


<div class="row spacer text-white text-center">

   @foreach ($products as $product)

     <div class="col-sm-3 spacer">
         <a href="{{ route('shop.show', $product->slug) }}"><img src=" {{ asset('images/'.$product->slug.'.jpg') }}" alt="Responsive
         image" class="product-image"></a>
         <a href="{{ route('shop.show', $product->slug) }}" class="text-white"><h5 class="top-spacer-20">{{
         $product->name }}</h5></a>
         <p class="text-secondary">{{ moneyFormat($product->price/100, 'USD') }}</p>
     </div>
   @endforeach

</div>


@endsection
