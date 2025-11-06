<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
     // 👇 Indica la tabla correcta
    protected $table = 'actividades';
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'fecha',
    ];

    protected $dates = ['fecha'];
}
