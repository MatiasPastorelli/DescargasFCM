@extends('layouts.presentacion.app')

@section('title', 'Descargas FCM')

@section('meta')

@endsection

@section('css')

@endsection

@section('content')


<!-- Main Slider With Form -->
<section class="site-slider">
    <div id="siteslider" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
          <li data-target="#siteslider" data-slide-to="0" class="active"></li>
          <li data-target="#siteslider" data-slide-to="1"></li>
          <li data-target="#siteslider" data-slide-to="2"></li>
          <li data-target="#siteslider" data-slide-to="3"></li>
          <li data-target="#siteslider" data-slide-to="4"></li>
          <li data-target="#siteslider" data-slide-to="5"></li>
       </ol>
       <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('img/carousel/20.jpg')">
            <div class="overlay overlay-primary">
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('img/carousel/21.jpg')">
             <div class="overlay">
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('img/carousel/22.jpg')">
             <div class="overlay">
            </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#siteslider" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#siteslider" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
       </a>
    </div>

    <div class="slider-form">
        <div class="container">
           <div class="text-center mb-5">
            <div class="mt-0" >
                <img class="img-fluid" src="img/iconos/logo_transparent.png"  width="350"  alt="">
           </div>
           </div>

        </div>
     </div>

</section>
<!-- End Main Slider With Form -->



<!-- Properties by City -->
<section class="section-padding bg-white">
    <div class="section-title text-center mb-5">
       <h2>Servicios</h2>
    </div>
    <div class="container">
       <div class="row">
          <div class="col-lg-3">
             <div class="card bg-dark text-white card-overlay">
                <a href="#">
                   <img class="card-img" src="img/carousel/9.jpg" alt="Card image">
                   <div class="card-img-overlay">
                      <h3 class="card-title text-white">Carga y Descarga</h3>
                      <p class="card-text text-white">Servicio para contenedores de 20, 40 y carga suelta</p>
                   </div>
                </a>
             </div>
          </div>
          <div class="col-lg-3">
             <div class="card bg-dark text-white card-overlay">
                <a href="#">
                   <img class="card-img" src="img/carousel/10.jpg" alt="Card image">
                   <div class="card-img-overlay">
                    <h3 class="card-title text-white">Clasificacion y separacion</h3>
                   </div>
                </a>
             </div>
          </div>
          <div class="col-lg-3">
             <div class="card bg-dark text-white card-overlay">
                <a href="#">
                   <img class="card-img" src="img/carousel/11.jpg" alt="Card image">
                   <div class="card-img-overlay">
                    <h3 class="card-title text-white">Paletizado</h3>
                   </div>
                </a>
                .
             </div>
          </div>
          <div class="col-lg-3">
             <div class="card bg-dark text-white card-overlay">
                <a href="#">
                   <img class="card-img" src="img/carousel/9.jpg" alt="Card image">
                   <div class="card-img-overlay">
                    <h3 class="card-title text-white">Servicios especiales</h3>
                   </div>
                </a>
             </div>
          </div>
       </div>
    </div>
</section>
 <!-- End Properties by City -->

<!-- end -->

<!-- Join Team -->
<section class="py-5 bg-primary">
    <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-8">
                <h2 class="text-white my-2">Poner algo aqui</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <a type="button" class="btn btn-outline-light my-2" href="{{asset('/')}}">Acerca de</a> 
                <a type="button" class="btn btn-light my-2" href="{{asset('/contacto')}}" >Contactenos</a>
            </div>
        </div>
    </div>
</section>
<!-- End Join Team -->



@endsection

@section('modals')

@endsection

@section('scripts')

@endsection
