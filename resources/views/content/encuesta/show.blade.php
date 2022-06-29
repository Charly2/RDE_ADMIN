@extends('layouts/contentNavbarLayout')

@section('title', 'Account settings - Account')

@section('page-script')
  <script src="{{asset('assets/js/pages-account-settings-account.js')}}"></script>
@endsection

@section('content')
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">ENCUESTA /</span> {{$encuesta['id_Encuesta']}}
  </h4>

  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4">
        <h5 class="card-header">Detalle de la Encuesta</h5>
        <!-- Account -->
        <hr class="my-0">
        <div class="card-body">
            <div class="row">
              <div class="mb-3 col-md-6">
                <label for="firstName" class="form-label">Nombre</label>
                <input disabled class="form-control text-uppercase " type="text" id="firstName" name="firstName" value="{{$encuesta['nombre_contacto']}}" autofocus />
              </div>
              <div class="mb-3 col-md-6">
                <label for="lastName" class="form-label">Teléfono</label>
                <input disabled class="form-control text-uppercase " type="text" id="firstName" name="firstName" value="{{$encuesta['numero_contacto']?$encuesta['numero_contacto']:'--'}}" autofocus />
              </div>
              <div class="mb-3 col-md-6">
                <label for="email" class="form-label">Fecha</label>
                <input disabled class="form-control text-uppercase " type="text" id="firstName" name="firstName" value="{{$encuesta['fecha']." ".$encuesta['hora']}}" autofocus />
              </div>
              <div class="mb-3 col-md-6">
                <label for="organization" class="form-label">Comentario</label>
                <textarea style="resize: none;" disabled class="form-control text-uppercase " autofocus >
                  {{$encuesta['comentario']}}
                </textarea>
              </div>
            </div>
        </div>
        <hr class="my-0">
        <div class="card-body">
            <div class="row">


              @forelse($respuestas as $respuesta)


                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">{{$respuesta->pregunta->texto}}</label>
                  <div  class="form-control disabled text-uppercase "  >
                    @foreach(explode(',',$respuesta->pregunta->opciones_Respuesta) as $i => $resp)
                      @if($i == intval($respuesta['valor'])-1)
                        {{ $resp }}
                      @endif
                    @endforeach
                  </div>



                </div>

              @empty



              @endforelse

            </div>
        </div>
        <!-- /Account -->
      </div>

    </div>
  </div>
@endsection
