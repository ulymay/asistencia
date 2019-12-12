<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $fillable = ['name', 'email', 'password'];

    public function clases(){

        return $this->belongsToMany('App\Clase');
    }

    public function asistencias(){

        return $this->belongsToMany('App\Asistencia');
    }

}
