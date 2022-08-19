<header>
    <div class="sticky">
      <div class="container">

        <!-- Logo -->
        <div class="logo"> <a href="index.html"><img class="img-responsive" src="{{ asset('user/images/logo.png') }}" alt="" ></a> </div>
        <nav class="navbar ownmenu">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"><i class="fa fa-navicon"></i></span> </button>
          </div>

          <!-- NAV -->
          <div class="collapse navbar-collapse" id="nav-open-btn">
            <ul class="nav">
                <li> <a href="{{ url('/home') }}">Home </a> </li>
                <li> <a href="{{ url('/product') }}">Product </a> </li>


              <!-- MEGA MENU -->
              <li class="dropdown megamenu"> <a href="#." class="dropdown-toggle" data-toggle="dropdown">store</a>
                <div class="dropdown-menu">
                  <div class="row">
                  </div>
                </div>
              </li>
              <li> <a href="contact.html"> contact</a> </li>
            </ul>
          </div>

          <!-- Nav Right -->
          <div class="nav-right">
            <ul class="navbar-right">

              <!-- USER INFO -->
              @auth
              <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class="icon-user"></i> </a>
                <ul class="dropdown-menu">
                  <li>
                    <h6>HELLO! {{ Auth::user()->name }} </h6>
                  </li>
                  <li><a href="{{ url('cart') }}">MY CART</a></li>
                  <li><a href="{{ url('order/info') }}">ORDER INFO</a></li>
                  <li><a href="{{ url('logout') }}">LOG OUT</a></li>
                </ul>
              </li>
              @endauth
              @guest
                <li class="dropdown user-acc"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" ><i class="icon-user"></i> </a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('login') }}">Login</a></li>
                  <li><a href="{{ url('register') }}">Register</a></li>
                </ul>
              </li>
              @endguest
              <!-- USER BASKET -->
              <li class="dropdown user-basket"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="icon-basket-loaded"></i> </a>
              
              </li>

              <!-- SEARCH BAR -->
              <li class="dropdown"> <a href="javascript:void(0);" class="search-open"><i class=" icon-magnifier"></i></a>
                <div class="search-inside animated bounceInUp"> <i class="icon-close search-close"></i>
                  <div class="search-overlay"></div>
                  <div class="position-center-center">
                    <div class="search">
                      <form method="POST" action="{{ url('product/search') }}">
                        @csrf
                        <input type="text" placeholder="Search Shop" name="searchName">
                        <button type="submit"><i class="icon-check"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
