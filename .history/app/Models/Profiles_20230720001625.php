<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'fNacimiento',
        'dni',
        'celular',
        'ciclo',
        'genero',
        'direccion',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getOptionsGenero()
    {
        return [
            'Masculino',
            'Femenino',
            'Otro',
        ];
    }
}
