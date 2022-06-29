@php
  $container = 'container-fluid';
  $containerNav = 'container-fluid';
@endphp

@extends('layouts/contentNavbarLayout')

@section('title', 'Fluid - Layouts')

@section('content')

  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Sucursal /</span> {{$sucursal['nombre']}}
  </h4>

  <div class="col-xl-12">
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
        <li class="nav-item">
          <a href="{{ route('sucursal-today',['id_sucursal' => $sucursal['id_Sucursal']]) }}"  class="nav-link {{$today ? 'active' : '' }}"  ><i class="tf-icons bx bx-stopwatch"></i> POR ATENDER </a>
        </li>
        <li class="nav-item">
          <a  href="{{ route('sucursal-anteriores',['id_sucursal' => $sucursal['id_Sucursal']]) }}"   class="nav-link  {{$today ? '' : 'active' }}" ><i class="tf-icons bx bx-trending-down"></i> CERRADAS </a>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-home" role="tabpanel">
          <h5 class="card-header">Lista de Encuestas</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Fecha</th>
                <th>Acciones</th>
              </tr>
              </thead>
              <tbody class="table-border-bottom-0">
              @forelse($encuestas as $encuesta)
                <tr>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$encuesta['id_Encuesta']}}</strong></td>
                  <td class="text-uppercase">{{$encuesta['nombre_contacto']}}</td>
                  <td class="text-uppercase">{{$encuesta['telefono_contacto']?$encuesta['telefono_contacto']:'--'}}</td>
                  <td class="text-uppercase">{{$encuesta['fecha']}} {{$encuesta['hora']}}</td>
                  <td>
                    <a href="{{route('encuesta',['id_encuesta'=>$encuesta['id_Encuesta']])}}"  class="btn btn-sm btn-primary">Ver</a>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5">
                    <p class="text-center mt-4 ">SIN ENCUESTAS POR REVISAR</p>
                  </td>
                </tr>
              @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
