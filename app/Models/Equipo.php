<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    // Laravel asume automáticamente que este modelo se conecta a la tabla 'equipos'
    protected $table = 'equipos';

    // Campos que se pueden rellenar
    protected $fillable = ['nombre', 'numero_serie', 'descripcion'];
}