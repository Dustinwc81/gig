@extends('layouts.main')  <!-- tells where the file is -->

@section('title', '| Homepage')

   <!--BODY and start of product placements-->

@section('content')  <!-- pulls from main.blade.php -->


      <div class="row" style="padding-bottom:100px">
         <div class="col-md-10 offset-1">
               <img src="{{ URL::asset('images/sizeMatters.png')}}" width="600" height="350">
         </div>
      </div>

      <!--BODY and start of product placements-->
      <div class="container-fluid text-center bg-dark" style="padding-bottom: 20px">
         <div class="row">

            <div class="col-md-6 offset-3">
               <a class="navbar-brand" href="/gigs">
                  <img src="{{ URL::asset('images/threeProng.jpg')}}" width="500" height="250">
               </a>
               <p class="text-center text-white"><u>GIGS</u></br>
                  Choose Options for Your Custom Gig
               </p>
            </div>
         </div>

         <div class="row">
            <div class="col-md-4 offset-1">
               <a class="navbar-brand" href="/apparel">
                  <img src="{{ URL::asset('images/hat.jpg')}}" width="300" height="175">
               </a>
               <p class="text-center text-white"><u>Apparel</u></br>
                  Shop original JH2 Apparel
               </p>
            </div>
            <div class="col-md-4 offset-1">
               <a class="navbar-brand" href="/forgeYourOwn">
                  <img src="{{ URL::asset('images/twoProng.jpg')}}" width="300" height="175">
               </a>
               <p class="text-center text-white"><u>Forge Your Own</u></br>
                  Handy with a welder and grinder....</br>
                  We will ship all available materials to...</br>
                  Forge Your Own Gig!
               </p>
            </div>
         </div>
      </div>

@endsection
