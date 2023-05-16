<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cliente extends Model
{
    public $timestamps = false;

    protected $table = 'clientes';

    protected $fillable = [
        'Nombre',
        'Apellido',
        'CP',
        'Correo',
        'Contraseña',
    ];


    protected $hidden = [
        'Contraseña',
    ];



}
