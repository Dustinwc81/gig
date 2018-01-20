@extends('layouts.main')  <!-- tells where the file is -->

@section('title', '| Homepage')

   <!--BODY and start of product placements-->

@section('content')  <!-- pulls from main.blade.php -->

        <div class="row">
            <div class="hero">
               <div class="hero-image">
                   <img src="{{ URL::asset('images/IMG_3757.jpg') }}" alt="water" class="water-image">
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
        <div class="products-container top-spacer-60">
            <div class="row top-spacer-60">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <img class="img-fluid" src="{{ URL::asset('images/IMG_1558.JPG')}}" alt="Three Prong">
                                <div class="card-img-overlay" id="card1">

                                 </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                                <img class="img-fluid" src="{{ URL::asset('images/sizeMatters.png')}}" alt="Card image">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card top-spacer-20">
                                <img class="card-img-top img-fluid" src="{{ URL::asset('images/IMG_3895.jpg')}}" alt="Card image">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ URL::asset('images/IMG_2073.JPG')}}" alt="">
                    </div>
                    <div class="center top-spacer-80">
                        <h1 class="text-white">
                            High Performance Fishing Equipment
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    <script src="{{ URL::asset("js/welcome.js")}}"></script>
@endsection
