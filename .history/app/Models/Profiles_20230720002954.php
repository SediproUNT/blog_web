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
            'II' => '2',
            'II' => '3',
            'IV' => '4',
            'V' => '5',
            'VI' => '6',
            'VII' => '7',
            'VIII' => '8',
            'IX' => '9',
            'X' => '10',
        ];
    }
}
