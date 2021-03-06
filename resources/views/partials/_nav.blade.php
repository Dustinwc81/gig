<!-- Default nav bar off of https://getbootstrap.com/docs/4.0/components/navbar/-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
           <div class="container-fluid">
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                <a class="navbar-brand active" href="/">
                   <img src="{{ URL::asset('images/whiteLogo.png')}}" data-toggle="tooltip" data-placement="bottom" title="Home Page" width="300" height="175">
                </a>
            </ul>

            <!-- Right justified navbar -->

            <ul class="nav navbar-nav navbar-right">
               <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gigging Tournament
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="/giggingTournament">About the Gigging Tournament</a>
                 <a class="dropdown-item" href="/tournament">Gigging Tournament Results</a>
                <a class="dropdown-item" href="/youthTournament">Youth Tournament Results</a>
                <a class="dropdown-item" href="/facts">Facts and Statistics</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Shop
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ route('shop.index') }}">Gigs & Spears</a>
                 <a class="dropdown-item" href="/forgeYourOwn">Forge Your Own</a>
              </div>
            </li>

               <li class="nav-item">
                 <a class="nav-link" href="/myStory">My Story</a>
               </li>

               <li class="nav-item">
                 <a class="nav-link" href="https://forum.jh2gigs.com">Forum</a>
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
              </div>
            </li>

         <!-- Auth check, logged in-->
         @else
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Welcome {{ Auth::user()->name }}
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <a class="text-dark dropdown-item text-center" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                             Logout
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                 </div>

             </li>
         @endguest


            {{-- shopping cart in nav --}}
            <li class="nav-item">
               <a href="/cart" class="btn btn-link text-white">
                  <i class="fa fa-shopping-cart" aria-hidden="true"> CART<span class="text-bold">
                     @if ( Cart::instance('default')->count() > 0)
                        <span> {{ Cart::instance('default')->count() }}</span></span>
                     @endif
                  </i>
               </a>
            </li>
           </ul>  <!-- Nav Bar right -->
         </div> <!-- Collapse Div -->
        </div> <!-- Container Div -->
      </nav>
