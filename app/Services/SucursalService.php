<?php

namespace App\Services;

use App\Repositories\SucursalRepository;

class SucursalService
{

  public $repository;
  public function __construct( SucursalRepository $sucursalRepository )
  {
    $this->repository = $sucursalRepository;
  }

  public function show($id){
    return $this->repository->show($id);
  }

}
