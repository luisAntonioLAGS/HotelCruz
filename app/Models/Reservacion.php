<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;
    // Indicamos a Eloquent que esta clase representa una vista
    protected $table = 'view_detalle_reservacion';

    // Como una vista no tiene clave primaria, establecemos la propiedad $primaryKey a null
    protected $primaryKey = null;

    // Indicamos que no hay incremento automático en una vista
    public $incrementing = false;

    // Desactivamos los timestamps ya que las vistas no suelen tener campos created_at y updated_at
    public $timestamps = false;
}
