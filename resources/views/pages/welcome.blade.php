@extends('main')  <!-- tells where the file is -->

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

            <div class="col-md-2 offset-1">
               <a class="navbar-brand" href="#">
                  <img src="{{ URL::asset('images/threeProng.jpg')}}" width="300" height="175">
               </a>
               <p class="text-center text-white">Standard 3 prong</br>
                  $1,000,000 plus shipping
               </p>
            </div>

            <div class="col-md-2 offset-1">
               <a class="navbar-brand" href="#">
                  <img src="{{ URL::asset('images/twoProng.jpg')}}" width="300" height="175">
               </a>
               <p class="text-center text-white">Standard 2 prong</br>
                  $1,000,000 plus shipping
               </p>
            </div>

            <div class="col-md-2 offset-1">
               <a class="navbar-brand" href="#">
                  <img src="{{ URL::asset('images/sockHat.jpg')}}" width="300" height="175">
               </a>
               <p class="text-center text-white">JH2 Sock Hat</br>
                  $1,000,000 plus shipping
               </p>
            </div>

         </div>

         <div class="row">
            <div class="col-md-2 offset-1">
               <a class="navbar-brand" href="#">
                  <img src="{{ URL::asset('images/hat.jpg')}}" width="300" height="175">
               </a>
               <p class="text-center text-white">Slighly Used Hat</br>
                  $1,000,000 plus shipping
               </p>
            </div>
            <div class="col-md-2 offset-1">
               <a class="navbar-brand" href="#">
                  <img src="{{ URL::asset('images/twoProng.jpg')}}" width="300" height="175">
               </a>
               <p class="text-center text-white">Standard 2 prong</br>
                  $1,000,000 plus shipping</br>
                  (hair not included)
               </p>
            </div>
            <div class="col-md-2 offset-1">
               <a class="navbar-brand" href="#">
                  <img src="{{ URL::asset('images/sockHat.jpg')}}" width="300" height="175">
               </a>
               <p class="text-center text-white">Sock Hat</br>
                  $1,000,000 plus shipping</br>
                  (hair not included)
               </p>
            </div>
         </div>
      </div>

@endsection
