<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    use HasFactory;

    protected $fillable = [

        
        'firstname',
        'secondname',
        'lastname1',
        'lastname2',
        'cedula',
        'historia',
        'nacionalidad',
        'municipio',
        'fechaNac',
        'ciudad',
        'estado',
        'parroquia',
        'municipio',
        'genero',
        'direccion',
        'telfHab',
        'telfCel',
        'email',
        'nivelIns',
        'profOf',
        'fechaIng',
        'anioDiag',
        'estatusAdm',
        'servCargo',
        'elisa1',
        'elisa2',
        'wb',
    ];
}
