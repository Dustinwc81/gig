<!-- all my repetative code -->
<!doctype html>
<html lang="en">
<head>

   @include('partials._head') <!-- head partial -->

</head>

 <body>

      @include('partials._nav') <!-- navigation partial -->

   <div class="container-fluid text-center bg-dark" style="padding-bottom:100px">

      @yield('content') <!-- this is where the new content comes in -->

   </div> <!-- end of container -->

      @include('partials._footer') <!-- footer partial -->

      @include('partials._javascript')


</body>

</html>
