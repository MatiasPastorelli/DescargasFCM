<header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
         <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown"
                     aria-haspopup="true" aria-expanded="false">
                  Ayuda
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                     <a class="dropdown-item" href="{{asset('/')}}">Acerca de</a>
                     <a class="dropdown-item" href="{{asset('/contacto')}}">Contactenos</a>
                  </div>
                </li>
            </ul>

               <div class="my-2 my-lg-0">
                  <ul class="list-inline main-nav-right">
                     <li class="list-inline-item">
                        <a class="btn btn-link btn-sm" href="{{ asset('/') }}">Ingresa</a>
                     </li>
                  </ul>
               </div>
         </div>
      </div>
   </nav>
</header>
