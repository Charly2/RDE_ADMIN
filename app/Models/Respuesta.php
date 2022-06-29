<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;

    protected $table = 'respuesta';

    public function pregunta(){
      return $this->hasOne(Pregunta::class,'id_Pregunta','id_Pregunta');
    }

}
