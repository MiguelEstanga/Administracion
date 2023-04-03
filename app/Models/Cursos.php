<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombrecurso',
        'precio',
        'hora_entrada',
        'hora_salida',
        'aula',
        'fecha_inicio'
    ];

    public function users(){
        return $this->belongsToMany(User::class , 'profesor_cursos');
    }

    public function estudiantes(){
        return $this->belongsToMany(Estudiantes::class , 'estudiante_cursos');
    }
    
}
