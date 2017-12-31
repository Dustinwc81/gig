<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS pulled off of https://getbootstrap.com/docs/4.0/getting-started/introduction/#starter-template-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>JH2 GIGS</title>
  </head>


  <body>

<!-- Default nav bar off of https://getbootstrap.com/docs/4.0/components/navbar/-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">

             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

             <ul class="navbar-nav mr-auto">
             <a class="navbar-brand" href="#">
                <img src="{{ URL::asset('images/whiteLogo.png')}}" width="400" height="200">
             </a>
            </ul>

            <!-- Right justified navbar -->

            <ul class="nav navbar-nav navbar-right">

               <li class="nav-item">
                 <a class="nav-link" href="/myStory">My Story</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Gigs
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">GJW</a>
                   <a class="dropdown-item" href="#">LRW</a>
                  <!-- <div class="dropdown-divider"></div> -->
                   <a class="dropdown-item" href="#">EFC</a>
                   <a class="dropdown-item" href="#">AGC</a>
                 </div>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Forge Your Own
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">Gig Size</a>
                   <a class="dropdown-item" href="#">Prongs</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">Special</a>
                 </div>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Appareal
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="#">T-Shirts</a>
                   <a class="dropdown-item" href="#">Hats/Sock Hats</a>
                   <div class="dropdown-divider"></div>
                   <a class="dropdown-item" href="#">MISC</a>
                 </div>
               </li>
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
           </ul>
         </div> <!-- Collapse Div -->
        </div> <!-- Container Div -->
      </nav>

      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <img src="{{ URL::asset('images/sizeMatters.png')}}">
            </div>
         </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
