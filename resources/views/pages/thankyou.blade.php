@extends('layouts.main')

@section('title', 'JH2 Thanks You')

@section('content')

<div class="col-md-12 text-center text-white">
   <h1>Thank you for Your Order!!</h1>
   <h4 class="spacer">A confirmation email was sent to:</h4>
    <h2 class="spacer"> {{ Auth::user()->email }} </h2>
   <a href="/" class="btn btn-large btn-light">HOME PAGE</a>

</div>
@endsection
