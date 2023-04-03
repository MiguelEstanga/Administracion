<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
    use HasFactory;
    protected $fillable = ['aula','placa'];
    public function categoria(){
        return $this->belongsTo(Categoria::class ,'categoria_id');
    }
}
