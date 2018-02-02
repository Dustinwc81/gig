@extends('layouts.main')

@section('title', '|  2 & 3 Prong Hand Made Gigs and Spears')
@section('description', 'Hand made gigs.  Spears, 2 prong, and 3 prong gigs.')

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
         <p>{{ $gig->details }}</p>
         <p>{{ $gig->description }}</p>
         <h5 class="text-secondary">
            {{ moneyFormat($gig ->price/100, 'USD') }}</h5>

         <form action="{{ route('cart.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=" {{ $gig->id }}">
            <input type="hidden" name="name" value=" {{ $gig->name }}">
            <input type="hidden" name="price" value=" {{ $gig->price }}">
            {{-- <button type="submit" class="btn btn-secondary">Add to Cart</button> --}}
         </form>

   </div> <!-- col div -->

   @endforeach

</div>

<div class="row">
   <div class="col-md-6 offset-md-3">
      <h4 class="text-white">To place an order contact: <br>
                              John Henry Ward <br>
                              Phone:  918-964-9725<br>
                              Email: jhward@ridgerunners.net</h4>
   </div>

</div>




@endsection
