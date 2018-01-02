<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS pulled off of https://getbootstrap.com/docs/4.0/getting-started/introduction/#starter-template-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
   <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">

    <title>Contact Me</title>
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
             <a class="navbar-brand" href="/">
                <img src="{{ URL::asset('images/whiteLogo.png')}}" width="300" height="175">
             </a>
            </ul>
            </div>

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
                   Apparel
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
                <a class="dropdown-item" href="#">Login</a>
                <a class="dropdown-item" href="#">Check Out</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
            <a href="#" class="btn btn-dark" aria-label="View 3 items in your shopping cart">
               <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
            </a>
           </ul>
         </div> <!-- Collapse Div -->
        </div> <!-- Container Div -->
      </nav>

      <hr>
      <!--Contact form-->

      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1>Contact Me</h1>
               <hr>
               <div class="form-group">
                  <label name="email">Email:</label>
                  <input id="email" name="email" class="form-control">
               </div>

               <div class="form-group">
                  <label name="subject">Subject:</label>
                  <input id="subject" name="subject" class="form-control">
               </div>

               <div class="form-group">
                  <label name="message">Message:</label>
                  <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
               </div>

               <input type="submit" value="Send Message" class="btn btn-success">

            </div>
         </div>
      </div>
<!-- Footer -->
<hr>

<footer class="page-footer center-on-small-only bg-dark text-white">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row" style="padding-top:20px">

            <!--First column-->
            <div class="col-md-4 offset-1">
                <h5 class="title text-muted">GET IN TOUCH</h5>
                <p>This is handmade quality shit we are talking about!!!!<br/>
                   <br/>
                   (555)867-5309<br/>
                   <br/>
                    JH2 GIGS<br/>
                    1000 HUN LN<br/>
                    GROVE, OK 74344</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-4 left-justified offset-1">
                <h5 class="title text-muted">EXPLORE</h5>
                <ul>
                    <a class="text-white" href="/myStory">MY STORY</a><br/>
                    <a class="text-white" href="#!">SERVICES</a><br/>
                    <a class="active" href="/contact">CONTACT</a><br/>
                    <a class="text-white" href="#!">STAY CONNECTED</a><br/>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright text-center">
        <div class="container-fluid">
           <a href="/"><img class="top-margin logo-small" src="{{ URL::asset('images/whiteLogo.png') }}" width="75" height="75"</a>
           <a class="text-white "href="https://www.JH2Gigs.com"> <u>JH2Gigs.com</u> </a>
           Copyright &#169; JH2 GIGS 2018&hellip;Coming Soon!!  All Rights Reserved

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
