<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = ['maestro', 'falta', 'asistio', 'clase', 'hora_asist'];
}
