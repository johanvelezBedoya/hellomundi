@extends('layouts.plantilla')

@section('title', 'prueba')

@section('content')

<head>
  <link rel="stylesheet" href="css/dash.css">
</head>


<a class="nav-link" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class='bx bxs-cabinet'></i>
  <span class="links_name">Cruds</span>
</a>

{{-- Todo el contenido dentro del dropdown--}}
<div class="dropdown-menu text-center" aria-labelledby="navbarDropdown1" style="background-color:rgba(0, 0, 0, 0.705);" >
  <li>
    <a href="{{route('users.index')}}">
      <i class='bx bxs-chevron-right'></i>
      <span class="links_name">Usuarios</span>
    </a>
    <span class="tooltip">Usuarios</span>
  </li>
  {{-- Emprendimientos --}}
  <li>
    <a href="{{route('emprendimientos.index')}}">
      <i class='bx bxs-chevron-right'></i>
      <span class="links_name">Emprendimientos</span>
    </a>
    <span class="tooltip">Emprendimientos</span>
  </li>
  {{-- Publicaciones --}}
  <li>
    <a href="{{route('publicaciones.index')}}">
      <i class='bx bxs-chevron-right'></i>
      <span class="links_name">Publicaciones</span>
    </a>
    <span class="tooltip">Publicaciones</span>
  </li>
  {{-- Inversiones --}}
  <li>
    <a href="{{route('inversionistas.index')}}">
      <i class='bx bxs-chevron-right'></i>
      <span class="links_name">Inversiones</span>
    </a>
    <span class="tooltip">Inversiones</span>
  </li>
  {{-- Empleos --}}
  <li>
    <a href="{{route('empleos.index')}}">
      <i class='bx bxs-chevron-right'></i>
      <span class="links_name">Empleos</span>
    </a>
    <span class="tooltip">Empleos</span>
  </li>
   {{-- Buzones --}}
   <li>
    <a href="{{route('buzons.index')}}">
      <i class='bx bxs-chevron-right'></i>
      <span class="links_name">Buzones</span>
    </a>
    <span class="tooltip">Buzones</span>
  </li>
</div>


<br>
<br>


<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <li>
    <h2 class="accordion-header" id="headingThree">
      <a class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <i class='bx bxs-cabinet'></i>
        <span class="links_name">Cruds</span>
      </a>
      <span class="tooltip">Cruds</span>
    </h2>
    </li>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        {{-- Usuarios --}}
        <li>
          <a href="{{route('users.index')}}">
            <i class='bx bxs-chevron-right'></i>
            <span class="links_name">Usuarios</span>
          </a>
          <span class="tooltip">Usuarios</span>
        </li>
        {{-- Emprendimientos --}}
        <li>
          <a href="{{route('emprendimientos.index')}}">
            <i class='bx bxs-chevron-right'></i>
            <span class="links_name">Emprendimientos</span>
          </a>
          <span class="tooltip">Emprendimientos</span>
        </li>
        {{-- Publicaciones --}}
        <li>
          <a href="{{route('publicaciones.index')}}">
            <i class='bx bxs-chevron-right'></i>
            <span class="links_name">Publicaciones</span>
          </a>
          <span class="tooltip">Publicaciones</span>
        </li>
        {{-- Inversiones --}}
        <li>
          <a href="{{route('inversionistas.index')}}">
            <i class='bx bxs-chevron-right'></i>
            <span class="links_name">Inversiones</span>
          </a>
          <span class="tooltip">Inversiones</span>
        </li>
        {{-- Empleos --}}
        <li>
          <a href="{{route('empleos.index')}}">
            <i class='bx bxs-chevron-right'></i>
            <span class="links_name">Empleos</span>
          </a>
          <span class="tooltip">Empleos</span>
        </li>
         {{-- Buzones --}}
         <li>
          <a href="{{route('buzons.index')}}">
            <i class='bx bxs-chevron-right'></i>
            <span class="links_name">Buzones</span>
          </a>
          <span class="tooltip">Buzones</span>
        </li>
      </div>
    </div>
  </div>
</div>

{{-- <div class="profile-card-10" style="height:12rem">
  {{-- Imagen 
  <div class="img shadow-lg" style="background-color:rgb(0, 0, 0)">
    <img  class="img img-responsive" src="{{'http://localhost/bizsett/public\storage\multimedia_folder\pexels-jarod-lovekamp-3791466.jpg'}}" class="img-fluid" alt="img">
    <div class="profile-position">Lorem Ipsum Donor</div>  
    
    <div class="profile-overview">
        <div class="profile-overview">
          
            <div class="row text-center">
                <div class="col-xs-4">
                    <h6>1</h6>
                    <p class="h6">Reacciones</p>
                </div>
                <div class="col-xs-4">
                    <h6>50</h6>
                    <p class="h6">Comentarios</p>
                </div>
                <div class="col-xs-4">
                    <h6>35</h6>
                    <p class="h6">Compartido</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>



<div class="profile-card-10">
  <img src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-6.jpg" class="img img-responsive">
    <div class="profile-position">Lorem Ipsum Donor</div>
    <div class="profile-overview">
        <div class="profile-overview">
            <div class="row text-center">
                <div class="col-xs-4">
                    <h6>1</h6>
                    <p class="h6">Reacciones</p>
                </div>
                <div class="col-xs-4">
                    <h6>50</h6>
                    <p class="h6">Comentarios</p>
                </div>
                <div class="col-xs-4">
                    <h6>35</h6>
                    <p class="h6">Compartido</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

  h1,h2,h3,h4,h5,h6,div,input,p,a {
    font-family: "Open Sans";
    margin: 0px;
  }


  .container-fluid,
  .container {
    max-width: 1200px;
    height: 100%;
    width: 
  }

  .profile-card-10 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
  }

  .profile-card-10 .profile-position {
    position: absolute;
    color: rgba(0, 0, 0, 0.4);
    left: 30px;
    top: 10px;
    transition: all 0.15s linear;
  }

  .profile-card-10 .profile-overview {
    position: absolute;
    bottom: 0px;
    left: 10px;
    right: 10px;
    background: linear-gradient(0deg, rgba(236, 226, 226, 0.4) 50%, rgba(255, 255, 0, 0));
    color: rgb(0, 0, 0, 0.4);
    padding: 50px 0px 20px 0px;
    transition: all 0.15s linear;
  }

  .profile-card-10 .profile-overview p {
    color: rgba(0, 0, 0, 0.4);
  }

  .profile-card-10:hover .profile-name {
    padding-left: 25px;
    padding-top: 20px;
  }
</style>   --}}

@endsection


{{-- <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200rounded-lg shadow-lg">
    
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    @error('message')
    <p class="alert alert-danger">*Error</p>
    @enderror
</div> --}}


{{-- <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
            <a class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="color: #f9ae00">
            Ver comentarios
            </a>

            <hr>
            <br>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate 
                </div>
            </div>
</div> --}}
 
{{-- <div class="container">
    <div class="row">
      
  <div class="col-md-12">
      <h4 class="text-center"><strong>EDITAR PERFIL </strong></h4>
      <hr>
      <div class="profile-card-10"><img src="http://localhost/bizsett/public/storage/img/pexels-troy-squillaci-2516588.jpg" class="img img-responsive">
          <div class="profile-name">DANIELA
              <br>ARIAS</div>
          <div class="profile-position">Lorem Ipsum Donor</div>
          <div class="profile-overview">
              <div class="profile-overview">
                  <div class="row text-center">
                      <div class="col-xs-4">
                          <h3>1</h3>
                          <p>Rank</p>
                      </div>
                      <div class="col-xs-4">
                          <h3>50</h3>
                          <p>Matches</p>
                      </div>
                      <div class="col-xs-4">
                          <h3>35</h3>
                          <p>Goals</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div> --}}
  
{{-- <style>
  
  
  h1,h2,h3,h4,h5,h6,div,input,p,a {
      font-family: "Open Sans";
      margin: 0px;
  }
  
  
  
  
  .container-fluid,
  .container {
      max-width: 1200px;
      height: 100%;
      width: 
  }
  
  .profile-card-10 {
      max-width: 300px;
      background-color: #FFF;
      border-radius: 5px;
      box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      position: relative;
      margin: 10px auto;
      cursor: pointer;
  }
  
  
  
  .profile-card-10 .profile-name {
      position: absolute;
      top: 10px;
      left: 10px;
      font-size: 25px;
      font-weight: bold;
      color: #FFF;
      padding: 15px 20px;
      background: linear-gradient(140deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0) 50%);
      transition: all 0.15s linear;
  }
  
  .profile-card-10 .profile-position {
      position: absolute;
      color: rgba(255, 255, 255, 0.4);
      left: 30px;
      top: 100px;
      transition: all 0.15s linear;
  }
  
  .profile-card-10 .profile-overview {
      position: absolute;
      bottom: 0px;
      left: 10px;
      right: 10px;
      background: linear-gradient(0deg, rgba(236, 226, 226, 0.4) 50%, rgba(255, 255, 0, 0));
      color: #FFF;
      padding: 50px 0px 20px 0px;
      transition: all 0.15s linear;
  }
  
  
  
  .profile-card-10 .profile-overview p {
      color: rgba(255, 255, 255, 0.7);
  }
  
  
  
  .profile-card-10:hover .profile-name {
      padding-left: 25px;
      padding-top: 20px;
  } 

</style> --}}

 {{-- <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div> 
  
  </div> --}}


{{-- 
<div class="window-notice" id="window-notice">
  <div class="content">
    <div class="col-md-8">
      <div class="card-body">

            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Full Name</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Kenneth Valdez
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Email</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                fip@jukmuh.al
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Phone</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                (239) 816-9029
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Mobile</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                (320) 380-4539
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-3">
                <h6 class="mb-0">Address</h6>
              </div>
              <div class="col-sm-9 text-secondary">
                Bay Area, San Francisco, CA
              </div>
            </div>

            <hr>

            <div class="row">
              <div class="col-sm-12">
                <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
              </div>
            </div>
            
      </div>
    </div>
    
        <div class="content-text">Este sitio utiliza cookies para obtener la mejor experiencia en nuestra web. 
        <a href="#">Leer más.</a>
        </div>
        <div class="content-buttons">
          <a href="#" id="close-button">Aceptar</a>
        </div>
  </div>
</div>

  
   
    
@endsection


<style>

    .window-notice {
        background: rgba(33, 41, 52, .85);
        left: 0;
        bottom: 0;
        right: 0;
        top: 0;
        display: flex;
        position: fixed;
        z-index: 999;
    }
    
    .window-notice .content {
        background: #fff;
        border-radius: 2px;
        box-shadow: 0 1px 3px rgba(33, 41, 52, .75);
        box-sizing: content-box;
        display: flex;
        flex-direction: column;
        margin: auto;
        max-width: 600px;
        min-width: 320px !important;
        overflow: hidden;
        position: relative;
        width: 100%;
        padding: 2rem;
        font-size: 1.3rem;
    }

    .card-body {
    flex: 1 1 auto;
    min-height: 10px;
    padding: 1rem;
  }

</style>
    
@endsection --}}
