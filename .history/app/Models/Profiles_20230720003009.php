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

    public static function getOptionsGenero()
    {
        return [
            '' => '-None-',
            'Masculino' => 'Masculino',
            'Femenino' => 'Femenino',
        ];
    }

    public static function getOptionsCiclo()
    {
        return [
            '' => '-None-',
            '1' => 'I',
            '2' => 'II',
            '3' => 'III',
            '4' => 'IV',
            '5' => 'V',
            '6' => 'VI',
            '7' => 'VII',
            
        ];
    }
}
