<?php

namespace App\Repositories;

use App\Models\Sucursal;

class SucursalRepository
{

  public function show($id){

    return Sucursal::find($id);

  }

}
