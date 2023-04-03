<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name',
        'apellido',
        'dni',
        'email',
        'password',
        'sexo'
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function cursos(){
        return $this->belongsToMany(Cursos::class , 'profesor_cursos');
    } 

    public function ProfesorCurso(){
        return $this->belongsToMany(ProfesorCurso::class, '');
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    //protected $casts = [
     //   'email_verified_at' => 'datetime',
    //];
}
