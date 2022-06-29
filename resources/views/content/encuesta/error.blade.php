@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
  <script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">ENCUESTA /</span> {{$encuesta}}
  </h4>

  <div class="container-xxl container-p-y text-center">
    <div class="misc-wrapper">
      <h2 class="mb-2 mx-2">ENCUESTA NO ENCONTRADA :(</h2>
      <p class="mb-4 mx-2">REGRESA A LA PAGINA ANTERIOR PARA VER LAS ENCUESTAS</p>
      <a href="{{url()->previous()}}" class="btn btn-primary">Regresar</a>
      <div class="mt-3">
        <img src="{{asset('assets/img/illustrations/page-misc-error-light.png')}}" alt="page-misc-error-light" width="500" class="img-fluid">
      </div>
    </div>
  </div>


@endsection










