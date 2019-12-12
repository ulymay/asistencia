<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/maestro', function (){
    return view('maestro');
});

Route::resource('materias', 'MateriasController');

Route::resource('alumnos', 'AlumnosController');

Route::resource('maestros', 'MaestrosController');

Route::get('/maestros/{id}/clases', function() {
    return view('maestros.clases');

});

// Route::get('/maestros/{id}/show', function($id){
//     $maestro = App\Maestro::find($id);

//     foreach($maestro->clases as $clase){
//         return $clase->codigo;
//     }
// });