<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use App\Models\Respuesta;
use App\Services\EncuestaService;
use Illuminate\Http\Request;

class EncuestaController extends Controller
{

  public $encuestaService;
  public function __construct(EncuestaService $encuestaService)
  {
    $this->encuestaService = $encuestaService;
  }

  public function show(Request $request, $id_encuesta){
    $encuesta = $this->encuestaService->show($id_encuesta);
    if ($encuesta){

      $respuestas = Respuesta::where('id_Encuesta',$id_encuesta)->get();

      return view('content.encuesta.show',[
        'encuesta' => $encuesta,
        'respuestas' => $respuestas,
      ]);
    }else{
      return view('content.encuesta.error',[
        'encuesta' => $id_encuesta
      ]);
    }
  }





}
