<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;


    protected $table = 'pregunta';

  public function label(){
    return explode(',',$this->opciones_Respuesta)??[];
  }
}
