@extends('layouts.main')

@section('title', '3 Prong Gigs, 2 Prong Gigs, Spears For Sale')
@section('description', 'Hand made fishing gigs, frogging gigs, and flounder gigs.  Spears, 2 prong gigs, and 3 prong gigs.')

@section('content')

    <div class="row">
        <div class="hero">
            <div class="hero-image">
                <img src="{{ URL::asset('images/FullSizeR.jpg')}}" alt="Henry" class="water-image height-50">
            </div>
            <h1 class="hero-title">GIGS</h1>
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
