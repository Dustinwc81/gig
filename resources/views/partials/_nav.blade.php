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

            <!-- Right justified navbar -->

            <ul class="nav navbar-nav navbar-right">
               <li class="nav-item">
                 <a class="nav-link" href="/myStory">My Story</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="/gigs">Gigs</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="/forgeYourOwn">Forge Your Own</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="/apparel">Apparel</a>
               </li>

               <!-- Auth check, not logged in-->
               @guest
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Register/Login
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="/register">Register</a>
                <a class="dropdown-item" href="/login">Login</a>
                <a class="dropdown-item" href="#">Admin Login</a>
                <a class="dropdown-item" href="/checkOut">Check Out</a>
              </div>
            </li>

         <!-- Auth check, logged in-->
         @else
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome {{ Auth::user()->name }}
                 </a>

                 <ul class="dropdown-menu text-center">
                     <li>
                         <a class="dropdown-item" href="/checkOut" >Check Out</a>
                         <div class="dropdown-divider"></div>
                         <a class="text-dark" href="{{ route('logout') }}"
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
               <i class="fa fa-shopping-cart" aria-hidden="true"> CART</i>
            </a>
           </ul>  <!-- Nav Bar right -->
         </div> <!-- Collapse Div -->
        </div> <!-- Container Div -->
      </nav>
