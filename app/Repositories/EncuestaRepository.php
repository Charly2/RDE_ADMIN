<?php

namespace App\Repositories;

use App\Models\Encuesta;
use Carbon\Carbon;

class EncuestaRepository
{

  public function index($id_sucursal, $date){
    return Encuesta::where('id_Sucursal',$id_sucursal)->where('fecha',$date)->get();
  }

  public function getMonth($id_sucursal, $date){
    return Encuesta::where('id_Sucursal',$id_sucursal)
      ->whereDate('fecha', '<',$date)
      ->whereDate('fecha', '>',Carbon::now()->format("Y-m-01"))
      ->orderBy('fecha','DESC')
      ->get();
  }


  public function show($id){

    return Encuesta::find($id);

  }

}
