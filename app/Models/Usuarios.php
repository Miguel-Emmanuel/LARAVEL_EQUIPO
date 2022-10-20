<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tb_usuarios';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'app',
        'ap',
        'edad',
        'genero',
        'foto',
        'activo',
    ];
}
