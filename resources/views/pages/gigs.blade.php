@extends('layouts.main')

@section('title', 'Spears, 2 Prong Gigs, 3 Prong Gigs')
@section('description', 'Hand made fishing gigs, frogging gigs, and flounder gigs.  Spears, 2 prong gigs, and 3 prong gigs.')

@section('content')

<div class="row spacer text-white">
      <div class="col-md-4 offset-md-4">
          <h2 class="spacer"><strong>JH2 GIGS and SPEARS</strong></h2>
         <img src="{{ URL::asset('images/blacklogo.png')}}" width="200" height="300">
      </div>
</div>


<div class="row spacer text-white">

   @foreach ($gigs as $gig)

   <div class="col-sm-4 offset-sm-1" style="padding-top:40px">
         <img src=" {{ asset('images/'.$gig->slug.'.jpg') }}" class="img-fluid" alt="Responsive image">
   </div> <!-- col div -->

   <div class="col-sm-5 spacer">
         <a class="text-white"><h3><strong>{{ $gig->name }}</strong></h3></a>
         <p>{{ $gig->details }}</p>
         <p class="product-description">{{ $gig->description }}</p>
         <h5 class="text-secondary">
            {{ moneyFormat($gig ->price/100, 'USD') }}</h5>

         <form action="{{ route('cart.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=" {{ $gig->id }}">
            <input type="hidden" name="name" value=" {{ $gig->name }}">
            <input type="hidden" name="price" value=" {{ $gig->price }}">
            <button type="submit" class="btn btn-secondary">Add to Cart</button>
         </form>
   </div>


   @endforeach

</div>


@endsection
