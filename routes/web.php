<?php


use App\Http\Controllers\Login;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\Registeruser;

use App\Http\Livewire\AsignarMateriaLivewire;
use App\Http\Livewire\Aulas;
use App\Http\Livewire\Calendarivista;
use App\Http\Livewire\Categorias;
use App\Http\Livewire\Crearcurso;
use App\Http\Livewire\CursosLivewire;
use App\Http\Livewire\GestionarUsuariosLivewire;
use App\Http\Livewire\Inicio;
use App\Http\Livewire\InscribirEstudiante;
use App\Http\Livewire\MateriaProfesorLivewire;
use App\Http\Livewire\PagosLiwire;
use App\Http\Livewire\PlantillaAsignacionEstudiante;
use App\Http\Livewire\PlantillaDeRegistroController;
use App\Http\Livewire\VistaProfesor;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

  
    

  
    Route::get('/planilla' , PlantillaAsignacionEstudiante::class);
  
    Route::get('categoria' , Categorias::class);//creamos una categoria
   

    Route::get('aulas' ,  Aulas::class)->middleware('can:admincurso.create');//creamos nuestra aula virtual
    Route::get('cursos' ,  CursosLivewire::class)->middleware('can:admincurso.create');// creamos cursos 
    Route::get('plantilladeregistro' ,  PlantillaDeRegistroController::class)->middleware('can:admincurso.create');//registramos a personal administrativo y profesore
    Route::get('gestionarusuarios' ,  GestionarUsuariosLivewire::class)->middleware('can:admincurso.create'); // gestionamos al personal administrativo
    Route::get('asignarmateria' ,  AsignarMateriaLivewire::class)->middleware('can:admincurso.create');//asignamos una materia a los profesores
    Route::get('vermateriaprofesor' ,  MateriaProfesorLivewire::class)->middleware('can:adminUsuarios.index');//vesmos a los profesores con sus materia
    Route::get('inscribirEstudiante', InscribirEstudiante::class)->middleware('can:admincurso.create');//matriculamos un estudiante
    Route::get('calendario' ,  Calendarivista::class )->middleware('can:adminUsuarios.index');
    Route::get('pago' ,  PagosLiwire::class )->middleware('can:admincurso.create');

    Route::get('inicio' ,  Inicio::class )->middleware('can:admincurso.create');

    Route::get('verMaterias' ,  VistaProfesor::class);

    Route::get('/', function () {
        return view('layouts.app');
    })->name('inicio');
});



//Rutas de la autentificacion

//login
Route::get('/login', [Login::class, 'index'])->name('login');
Route::post('/login', [Login::class, 'store'])->name('login.store');
Route::post('/logout', [Login::class, 'logout'])->name('logout');


//registrar usuarios
Route::post('registro', [Registeruser::class, 'store'])->name('registro.store');
