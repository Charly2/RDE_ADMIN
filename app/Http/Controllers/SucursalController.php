<?php

namespace App\Http\Controllers;

use App\Services\EncuestaService;
use App\Services\SucursalService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SucursalController extends Controller
{

  public $encuestaService;
  public $sucursalService;
  public function __construct(EncuestaService $encuestaService, SucursalService $sucursalService)
  {
    $this->encuestaService = $encuestaService;
    $this->sucursalService = $sucursalService;
  }

  public function index(Request $request, $id_sucursal){
    $sucursal = $this->sucursalService->show($id_sucursal);
    $encuestas = $this->encuestaService->index($id_sucursal,Carbon::now()->format("Y-m-d") );
    return view('content.encuesta.index',[
      'sucursal' => $sucursal,
      'encuestas' => $encuestas,
      'today' => true,
    ]);
  }

  public function anteriroes(Request $request, $id_sucursal){
    $sucursal = $this->sucursalService->show($id_sucursal);
    $encuestas = $this->encuestaService->getMonth($id_sucursal,Carbon::now()->format("Y-m-d") );
    return view('content.encuesta.index',[
      'sucursal' => $sucursal,
      'encuestas' => $encuestas,
      'today' => false,
    ]);
  }

}
