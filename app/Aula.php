<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $table='aulas';
    protected $fillable=['numero_aula','descripcion'];
}
