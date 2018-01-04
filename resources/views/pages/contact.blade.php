   @extends('main')

   @section('title', '|  Contact')

      <!--Contact form-->

      @section('content')


         <div class="row">
            <div class="col-md-6 offset-3">
               <h1 class="bg-dark text-white">Contact Me</h1>
               <hr>
               <div class="form-group text-white">
                  <label name="email">Email:</label>
                  <input id="email" name="email" class="form-control">
               </div>

               <div class="form-group text-white">
                  <label name="subject">Subject:</label>
                  <input id="subject" name="subject" class="form-control">
               </div>

               <div class="form-group  text-white">
                  <label name="message">Message:</label>
                  <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
               </div>

               <input type="submit" value="Send Message" class="btn btn-success">

            </div>
         </div>

      @endsection
