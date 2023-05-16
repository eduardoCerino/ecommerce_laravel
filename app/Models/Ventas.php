<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{

    public $timestamps = false;

    protected $table = 'ventas';

    protected $fillable = [
        'Id_compra',
        'Id_usuario',
        'articulo_1',
        'articulo_2',
        'articulo3',

    ];


}
