@extends('layouts.main')

@section('title', '|  Thank You')

@section('content')

<div class="col-md-12 text-center text-white">
   <h1>Thank you for Your Order!!</h1> <br>
   <h4 class="spacer">A confirmation email was sent <br>
                     {{-- {{ Auth::user()->email }} --}}</h4>


   <a href="/" class="btn btn-large btn-light">HOME PAGE</a>

</div>
@endsection
