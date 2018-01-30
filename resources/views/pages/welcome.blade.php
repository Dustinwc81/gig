@extends('layouts.main')  <!-- tells where the file is -->

@section('title', '|   JH2 GIGS')
@section('description', 'Purchase hand forged gigs made for fishing or frogging.  View the National Gigging Tournament Results, also view the National Youth Tournament Results.  Connect with fellow giggers through the forum.')

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
                                <a href="{{ route('gigs.index')}}"><img class="img-fluid" src="{{ URL::asset('images/IMG_1558.JPG')}}" alt="gigs"></a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card ">
                                <a href="{{route('gigs.index')}}"><img class="img-fluid" src="{{ URL::asset('images/sizeMatters.png')}}" alt="size matters"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="card top-spacer-20">
                                <a href="{{route('gigs.index')}}"><img class="card-img-top img-fluid" src="{{ URL::asset('images/IMG_3895.jpg')}}" alt="gigs"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <a href="{{route('gigs.index')}}"><img class="card-img-top img-fluid" src="{{ URL::asset('images/IMG_2073.JPG')}}" alt="gigs"></a>
                    </div>
                    <div class="center top-spacer-80">
                        <h1 class="text-white">
                            High Performance Fishing Equipment
                        </h1>
                    </div>
                </div>
            </div>
        </div>
@endsection
