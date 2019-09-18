<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
         <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">{{\Request::route()->getName()}}</a>
         </div>
         <div>
            @if (session('status'))
            <div class="alert alert-success">
               {{ session('status') }}
            </div>
            @endif
         </div>
         <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
         <span class="sr-only">Toggle navigation</span>
         <span class="navbar-toggler-icon icon-bar"></span>
         <span class="navbar-toggler-icon icon-bar"></span>
         <span class="navbar-toggler-icon icon-bar"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
               <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-white btn-round btn-just-icon">
                     <i class="material-icons">search</i>
                     <div class="ripple-container"></div>
                  </button>
               </div>
            </form>
            <ul class="navbar-nav">
               <li class="nav-item dropdown">
                  <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="material-icons">notifications</i>
                     <span class="notification">5</span>
                     <p class="d-lg-none d-md-block">
                        Some Actions
                     </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="#">Another One</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="material-icons">person</i>
                     <p class="d-lg-none d-md-block">
                        Account
                     </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                     <a class="dropdown-item" href="#"><b>{{ Auth::user()->name }}</b></a>
                     <a class="dropdown-item" href="#">Profile</a>
                     <a class="dropdown-item" href="#">Settings</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                     Logout
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                     </form>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </nav>