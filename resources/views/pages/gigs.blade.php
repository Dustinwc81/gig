@extends('layouts.main')

@section('title', '|  Gigs')

@section('content')

<div class="row spacer">
      <div class="col-md-4 offset-md-4">
         <img src="{{ URL::asset('images/blotchlogo.png')}}" width="200" height="300">
      </div>
</div>

<div class="row spacer">
   <div class="col-md-4">
      <img src="{{ URL::asset('images/single.JPG')}}" class="img-thumbnail">
   </div>
   <div class="col-md-4">
      <img src="{{ URL::asset('images/multi.jpg')}}" class="img-thumbnail">
   </div>
   <div class="col-md-4">
      <img src="{{ URL::asset('images/mounted3.jpg')}}" class="img-thumbnail">
   </div>
</div>

   <div class="row text-white">
      <div class="col-md-6 offset-3">
         <h2>To Place an Order:</h2>
         <h4>Contact:  John Henry Ward</h4>
         <h5>Phone:  (918) 964-9725</h5>
         <h5>Email:  bighenry71@gmail.com</h5>
      </div>
   </div>

</div>

@endsection
