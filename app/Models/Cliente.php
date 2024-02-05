<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    // Indicamos a Eloquent que esta clase representa una vista
    protected $table = 'view_detalle_cliente';

    // Desactivamos los timestamps ya que las vistas no suelen tener campos created_at y updated_at
    public $timestamps = false;
}
