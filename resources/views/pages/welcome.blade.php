@extends('layouts.main')  <!-- tells where the file is -->

@section('title', 'JH2 GIGS | High Performance Gigging Equipment')
@section('description', 'Purchase hand made spears, 2 prong gigs, and 3 prong gigs made for fishing or frogging.  View the National Gigging Tournament Results, also view the National Youth Tournament Results.  Connect with fellow giggers through the forum.')

   <!--BODY and start of product placements-->

@section('content')  <!-- pulls from main.blade.php -->

        <div class="row">
            <div class="hero">
               <div class="hero-image">
                   <img src="{{ URL::asset('images/IMG_3757.jpg') }}" alt="Gigs" class="water-image">
               </div>
                <h1 class="hero-title">JH2 GIGS</h1>
            </div>
        </div>

      <!--BODY and start of product placements-->
         <div class="row">
            <div class="col welcome-title-section">
                <h1 class="top-spacer-80 spacer font-weight-light text-light">High <span class="font-italic">Performance</span> Fishing Equipment</h1>
            </div>
        </div>
        <div class="products-container padding-bottom-60 top-spacer-60">
            <div class="row top-spacer-60">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <a href="{{ route('shop.index')}}"><img class="img-fluid" src="{{ URL::asset
                                ('images/IMG_1558.JPG')}}" alt="gigs"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card top-spacer-20">
                                <a href="{{route('shop.index')}}"><img class="card-img-top img-fluid" src="{{ URL::asset
                                ('images/IMG_3895.jpg')}}" alt="gigs"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <a href="{{route('shop.index')}}"><img class="card-img-top img-fluid" src="{{ URL::asset
                        ('images/IMG_2073.JPG')}}" alt="gigs"></a>
                    </div>
                    <div class="center top-spacer-80">

                    </div>
                </div>
            </div>
            <div class="row height-50 center">
                <div class="col">
                    <div class="top-spacer-80">
                        <h2 class="text-light font-weight-light text-left text-center">
                            Hand made gigs from <span class="font-italic">Oklahoma</span> since <span class="font-italic">1998</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
@endsection
