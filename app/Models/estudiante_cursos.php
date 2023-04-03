<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudiante_cursos extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Deuda',
      
        'observacion',
        'estudiante_id',
        'cursos_id',
        
    ];
}
