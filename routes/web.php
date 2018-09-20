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
Route::get('/inicio', function () {
    return view('bienvenida');
});

Route::get('/materia/reporte-pdf');
Route::resource('materia', 'MateriaController');

/*
Route::get('/materia/listado', 'MateriaController@index');
Route::get('/materia/create', 'MateriaController@create');
Route::get('/materia/edit', 'MateriaController@edit');
Route::post('/materia/store', 'MateriaController@store');
Route::post('/materia/update', 'MateriaController@update');
Route::get('/materia/show', 'MateriaController@show');
Route::get('/materia/reporte', 'MateriaController@pdfReport');
*/

////////////
Route::get('/materia/listado', function() {
  return view('materias.formMateria');
});

Route::get('/materia/create', function() {
  return view('materias.indexMateria');
});

Route::post('/materia/store', function() {
  $materia = $_POST['materia'];
  //sql UPDATE matere
  //redirect url
});

Route::get('/materia/edit', function() {
  return view('materias.formEditMateria');
});
Route::post('/materia/update', function() {
  $materia = $_POST['materia'];
  //sql UPDATE matere
  //redirect url
});

Route::get('/materia/show', function() {
  return view('materias.showMateria');
});
  
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/home', 'HomeController@index')->name('home');