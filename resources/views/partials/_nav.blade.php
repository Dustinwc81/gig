<!-- Default nav bar off of https://getbootstrap.com/docs/4.0/components/navbar/-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
             <a class="navbar-brand active" href="/">
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

               <!-- Auth check -->
               @guest
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Register/Login
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="/register">Register</a>
                <a class="dropdown-item" href="/login">Login</a>
                <a class="dropdown-item" href="#">Admin Login</a>
                <a class="dropdown-item" href="#">Check Out</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
         @else
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <ul class="dropdown-menu">
                     <li>
                         <a href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             Logout
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>
                 </ul>
             </li>
         @endguest

            <a href="#" class="btn btn-dark" aria-label="View 3 items in your shopping cart">
               <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
            </a>
           </ul>
         </div> <!-- Collapse Div -->
        </div> <!-- Container Div -->
      </nav>
