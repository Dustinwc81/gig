@extends('layouts.main')

@section('title', $product->name)

@section('description', $product->description)

@section('content')

<div class="row text-white">
    <div class="col-sm-4 offset-sm-2">
        <img src="{{ asset('images/'.$product->slug.'.jpg') }}" alt="">
    </div>

    <div class="col-sm-4">
        <h1>{{ $product->name }}</h1>
        <h6>{{ $product->details }}</h6>
        <h3>{{ moneyFormat($product->price/100, 'USD') }}</h3>
        <p>{{ $product->description }}</p>

        <form action="{{ route('cart.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value=" {{ $product->id }}">
            <input type="hidden" name="name" value=" {{ $product->name }}">
            <input type="hidden" name="price" value=" {{ $product->price }}">
            <button type="submit" class="btn btn-secondary">Add to Cart</button>
        </form>

    </div>


</div>

@endsection