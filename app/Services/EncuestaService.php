<?php

namespace App\Services;

use App\Repositories\EncuestaRepository;

class EncuestaService
{

  public $repository;
  public function __construct( EncuestaRepository $encuestaRepository )
  {
    $this->repository = $encuestaRepository;
  }

  public function index($id_sucursal, $date ){
    return $this->repository->index($id_sucursal, $date);
  }

  public function getMonth($id_sucursal, $date ){
    return $this->repository->getMonth($id_sucursal, $date);
  }

  public function show($id_encuesta ){
    return $this->repository->show($id_encuesta);
  }

}
