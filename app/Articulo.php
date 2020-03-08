<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $fillable=["departamento","seccion","codigo","articulo","marca","modelo","descripcion","status","ruta_imagen"];
}
