<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'apellido',
        'dni',
        'email',
        'password',
        'sexo'
    ];
    public function cursos(){
        return $this->belongsToMany(Cursos::class , 'estudiante_cursos');
    }
}
