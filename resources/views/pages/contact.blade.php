   @extends('layouts.main')

   @section('title', '|  Contact JH2')

      <!--Contact form-->

      @section('content')

         @if (session() -> has('success_message'))
            <div class="spacer"></div>
               <div class="alert alert-success">
                  {{ session()->get('success_message') }}
               </div>
         @endif

         <div class="row">
            <div class="col-md-6 offset-md-3">
               <h1 class="bg-dark text-white">Contact Us</h1>

               <form class="" action="{{ route('contact.store') }}" method="POST">
                  {{ csrf_field() }}

               <div class="form-group text-white">
                  <label name="name">Name:</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
               </div>

               <div class="form-group text-white">
                  <label name="email">Email:</label>
                  <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
               </div>

               <div class="form-group  text-white">
                  <label name="message">Message:</label>
                  <textarea name="message" id="message" value="" class="form-control" required></textarea>
               </div>

               <button class="btn btn-success" type="submit" name="button">Contact Us</button>
               </form>
            </div>
         </div>

      @endsection
