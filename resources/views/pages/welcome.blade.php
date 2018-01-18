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
                        <div class="card gig-merch-container">
                            <img class="card-img " src="{{ URL::asset('images/three-prong-200.jpg')}}" alt="Three Prong">
                            <div class="card-img-overlay" id="card1">

                             </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card gig-merch-container">
                            <img class="card-img" src="{{ URL::asset('images/twoProng.jpg')}}" alt="Card image">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col top-spacer-60">
                        <div class="card gig-merch-container">
                            <img class="card-img" src="{{ URL::asset('images/USA_Oklahoma_location_map.svg')}}" alt="Card image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card gig-merch-container">
                    <img class="card-img large-merch-container" src="{{ URL::asset('images/hat-600.jpg')}}" alt="hat">
                    <div class="card-img-overlay" id="">

                     </div>
                </div>
            </div>
         </div>
      </div>
    <script src="{{ URL::asset("js/welcome.js")}}"></script>
@endsection
