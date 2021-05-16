@extends('layouts.presentacion.app')

@section('title', 'Descargas FCM')

@section('meta')

@endsection

@section('css')

@endsection

@section('content')

<section class="section-padding bg-dark inner-header">
    <div class="container">
       <div class="row">
          <div class="col-md-12 text-center">
             <h1 class="mt-0 mb-3 text-white">Contactenos</h1>
             <div class="breadcrumbs">
                <p class="mb-0 text-white"><a class="text-white" href="{{asset('/')}}">Inicio</a>  /  <span class="text-success">Contacto</span></p>
             </div>
          </div>
       </div>
    </div>
</section>

 <!-- Contact Me -->
 <section class="section-padding  bg-white">
    <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12 section-title text-left mb-4">
             <h2>Contacto</h2>
          </div>
          <form class="col-lg-12 col-md-12">
             <div class="row">
                <div class="control-group form-group col-lg-4 col-md-4">
                   <div class="controls">
                      <label>Nombre <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" required>
                   </div>
                </div>
                <div class="control-group form-group col-lg-4 col-md-4">
                   <div class="controls">
                      <label>Correo electronico <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" required>
                   </div>
                </div>
                <div class="control-group form-group col-lg-4 col-md-4">
                   <div class="controls">
                      <label>Telefono <span class="text-danger">*</span></label>
                      <input type="email" class="form-control" required>
                   </div>
                </div>
             </div>
             <div class="control-group form-group">
                <div class="controls">
                   <label>Mensaje <span class="text-danger">*</span></label>
                   <textarea rows="10" cols="100" class="form-control"></textarea>
                </div>
             </div>
             <a type="submit" class="btn btn-success" href="{{asset('/')}}">volver</a>
          </form>
       </div>
    </div>
 </section>
 <!-- End Contact Me -->

@endsection

@section('modals')

@endsection

@section('scripts')

@endsection
