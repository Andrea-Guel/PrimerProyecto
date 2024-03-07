<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursosController;
use App\Mail\ContactanosMaillable;
use Illuminate\Support\Facades\Mail;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    // Route::get('/', function () {
    // return view('welcome');
    // });

    Route::get('/', HomeController::class)->name('home');

    // //ejemplo de ruta con un solo metodo
    // Route::get('Curso/metodox', [CursosController::class,'metodo1'])->name('hola');

    // //ejemplo de un grupo de rutas con varios metodos
    // Route::controller(CursosController::class)->Group(function(){

    // Route::get('cursos/index', 'index')->name('cursos.index');

    // Route::get('cursos/create', 'create')->name('cursos.create');
    // Route::post('cursos', 'store')->name('cursos.store');

    // Route::get('cursos/{curso}', 'show')->name('cursos.show');
    // Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
    // Route::put('cursos/{curso}', 'update')->name('cursos.update');

    // Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
    // });
    
    //forma que laravel crea la rutas
    //para ver las rutas php artisan r:l 
    //Route:: resource('nombre_nuevo', CursosController::class)->parameters(['nombre_nuevo'=>'curso'])->names('cursos');
    Route:: resource('cursos',CursosController::class);

    Route:: view('nosotros', 'nosotros')->name('nosotros');

    Route:: get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
    Route:: post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

    // Route::get('contactanos', function(){

    //     Mail::to('andreaguel2028@gmail.com')->send(new ContactanosMaillable);

    //     return "mensaje enviado";

    // })->name('contactanos');

/*
    Route::get('Curso/{Variable1}/{variable2?}', function($Variable1, $variable2 = null){
    if($variable2){
        return("Curso y $Variable1, asi como $variable2");
    }else{
        return("Curso y $Variable1");
    }
    });
 */

