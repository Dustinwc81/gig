@extends('layouts.main')

@section('title', '|  2 & 3 Prong Gigs, Spears')

@section('content')

<div class="row spacer">
      <div class="col-md-4 offset-md-4">
         <img src="{{ URL::asset('images/blacklogo.png')}}" width="200" height="300">
      </div>
</div>

<div class="row spacer text-white">

   @foreach ($gigs as $gig)

   <div class="col-sm-4" style="padding-top:20px">
         <img src=" {{ asset('images/'.$gig->slug.'.jpg') }}" class="img-fluid" alt="Responsive image">

         <a class="text-white"><h2>{{ $gig->name }}</h2></a>
         <h6 class="text-secondary">
            {{ moneyFormat($gig ->price/100, 'USD') }}</h6>
         <p>{{ $gig->description }}</p>

         <form action="{{ route('cart.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=" {{ $gig->id }}">
            <input type="hidden" name="name" value=" {{ $gig->name }}">
            <input type="hidden" name="price" value=" {{ $gig->price }}">
            <button type="submit" class="btn btn-secondary">Add to Cart</button>
         </form>
   </div> <!-- col div -->

   @endforeach

</div>




@endsection
