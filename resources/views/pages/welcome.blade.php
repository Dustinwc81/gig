@extends('layouts.main')  <!-- tells where the file is -->

@section('title', '| Homepage')

   <!--BODY and start of product placements-->

@section('content')  <!-- pulls from main.blade.php -->

        <div class="row">
            <div class="hero">
               <div class="hero-image">
                   <img src="{{ URL::asset('images/water-600.jpg') }}" alt="water" class="water-image">
               </div>
                <h1 class="hero-title">JH2 GIGS</h1>
            </div>
        </div>

      <!--BODY and start of product placements-->
         <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-white top-spacer-80 spacer">Gig Gear</h1>
            </div>
        </div>
        <div class="row top-spacer-60">
            <div class="col-sm-6">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <img class="card-img gig-merch-container" src="{{ URL::asset('images/three-prong-200.jpg')}}" alt="Card image">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text">Last updated 3 mins ago</p>
                             </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card gig-merch-container">
                            <img class="card-img" src="{{ URL::asset('images/three-prong-200.jpg')}}" alt="Card image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box"></div>
            </div>
         </div>
      </div>

@endsection
