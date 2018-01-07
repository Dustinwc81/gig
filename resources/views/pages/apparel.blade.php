@extends('layouts.main')

@section('title', '|  Apparel')

@section('content')

<div class="row text-white" style="padding-top:100px">

   <div class="col-sm-4">
         <img src="{{ URL::asset('images/shirt.jpg')}}" class="img-fluid" alt="Responsive image">

      <a class="text-white"><h2>JH2 Shirts</h2></a>
      <h6 class="text-secondary">SHIRT-$14.99</h6>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <hr>

      <div class="row">
         <div class="col-sm-6 offset-3">
            <select class="custom-select" id="inputGroupSelect01">
               <option selected>Select Quantity</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="1">4</option>
                  <option value="2">5</option>
                  <option value="3">6</option>
                  <option value="3">7</option>
                  <option value="2">8</option>
                  <option value="3">9</option>
                  <option value="3">10</option>
            </select>
         </div>
      </div><!-- select button div row -->
         <hr>
         <input class="btn btn-secondary" type="submit" value="Submit">

   </div> <!-- col div -->

   <div class="col-sm-4">
      @foreach ($products as $product)

         <img src="{{ URL::asset('images/shirt.jpg')}}" class="img-fluid" alt="Responsive image">

         <a class="text-white"><h2>{{$product->name}}</h2></a>
         <h6 class="text-secondary">SHIRT-${{$product->price / 100}}</h6>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         </p>

      @endforeach

      <hr>

      <div class="row">
         <div class="col-sm-6">
            <select class="custom-select" id="inputGroupSelect01">
               <option selected>Select Size</option>
               <option value="1">XSmall</option>
               <option value="2">Small</option>
               <option value="3">Medium</option>
               <option value="1">Large</option>
               <option value="2">XLarge</option>
               <option value="3">XXLarge</option>
               <option value="3">XXXLarge</option>
            </select>
         </div>

         <div class="col-sm-6">
            <select class="custom-select" id="inputGroupSelect01">
               <option selected>Select Quantity</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="1">4</option>
                  <option value="2">5</option>
                  <option value="3">6</option>
                  <option value="3">7</option>
                  <option value="2">8</option>
                  <option value="3">9</option>
                  <option value="3">10</option>
            </select>
         </div>
      </div><!-- select button div row -->
         <hr>
         <input class="btn btn-secondary" type="submit" value="Submit">
   </div> <!-- col div -->


   <div class="col-sm-4">
         <img src="{{ URL::asset('images/shirt.jpg')}}" class="img-fluid" alt="Responsive image">

      <a class="text-white"><h2>JH2 Shirts</h2></a>
      <h6 class="text-secondary">SHIRT-$14.99</h6>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
      <hr>

      <div class="row">
         <div class="col-sm-6 offset-3">
            <select class="custom-select" id="inputGroupSelect01">
               <option selected>Select Quantity</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="1">4</option>
                  <option value="2">5</option>
                  <option value="3">6</option>
                  <option value="3">7</option>
                  <option value="2">8</option>
                  <option value="3">9</option>
                  <option value="3">10</option>
            </select>
         </div>
      </div><!-- select button div row -->
         <hr>
         <input class="btn btn-secondary" type="submit" value="Submit">

   </div> <!-- col div -->
</div> <!-- row div -->



@endsection
