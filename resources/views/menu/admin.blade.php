@extends('menu.layoutsModals.layouts')
@section('title', 'Início - Alterar informações')
@section('dashboard', 'active bg-gradient-primary')
@section('pagina', 'Início - Alterar informações')
@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger">
    <p>{{ $message }}</p>
</div>
@endif

<div class="row">

    <div class="col-md-4 mb-4">
        <div class="card bg-gradient-dark shadow-lg">
          <span class="badge rounded-pill bg-primary w-40 mt-n2 mx-auto">Site</span>
          <div class="card-header text-center pt-4 pb-3 bg-transparent">
          </div>
          <div class="card-body text-lg-start text-center pt-0">
            <div class="d-flex justify-content-lg-start justify-content-center p-2">

              <span class="ps-3 text-white">Visualize como está o site!</span>
            </div>

            <a href="{{route('index')}}" class="btn btn-icon bg-gradient-primary d-lg-block mt-3 mb-0">
              Visualize como está o site clicando aqui!
              <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    <div class="col-md-4 mb-4">
      <div class="card shadow-lg">
        <span class="badge rounded-pill bg-light text-dark w-30 mt-n2 mx-auto">ALTERAR</span>
        <div class="card-header text-center pt-4 pb-3">
        </div>
        <div class="card-body text-lg-start text-center pt-0">
          <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto">remove</i>
            <span class="ps-3">Alterar planos do site
            </span>
          </div>

          <div class="d-flex justify-content-lg-start justify-content-center p-2">
            <i class="material-icons my-auto">remove</i>
            <span class="ps-3">Alterar equipe do site
            </span>
          </div>

          <a data-bs-toggle="modal" data-bs-target="#alterarSite" class="btn btn-icon bg-gradient-dark d-lg-block mt-3 mb-0">
            Alterar Site
            <i class="fas fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card bg-gradient-dark shadow-lg">
          <span class="badge rounded-pill bg-primary w-40 mt-n2 mx-auto">Sistema</span>
          <div class="card-header text-center pt-4 pb-3 bg-transparent">
          </div>
          <div class="card-body text-lg-start text-center pt-0">
            <div class="d-flex justify-content-lg-start justify-content-center p-2">

              <span class="ps-3 text-white">Volte para o sistema!</span>
            </div>

            <a href="https://sistema-academia-laravel.herokuapp.com/login" class="btn btn-icon bg-gradient-primary d-lg-block mt-3 mb-0">
              Acesse o sistema por aqui
              <i class="fas fa-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
  </div>

    <!-- Modal -->
    @include('menu.layoutsModals.modalsSite')

@endsection
