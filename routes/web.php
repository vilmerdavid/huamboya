<?php

use Illuminate\Support\Facades\Route;

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

// estaticas
Route::get('/documentos', 'Estaticas@documentos')->name('documentos');


// admin
Auth::routes(['register'=>false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/documentos-admin', 'Documentos@index')->name('documentosAdmin');
Route::post('/documentos-admin-guardar', 'Documentos@guardar')->name('guardarDocumentoAdmin');
Route::get('/categoria-eliminar/{id}', 'Documentos@eliminar')->name('eliminarCategoria');
Route::post('/documentos-admin-actualizar', 'Documentos@actualizar')->name('actualizarDocumentoAdmin');
Route::post('/documentos-admin-guardar-archivo', 'Documentos@guardarArchivo')->name('guardarDocumento');
Route::get('/documento-info/{id}', 'Documentos@info')->name('documentoInfo');
Route::get('/documento-eliminar/{id}', 'Documentos@eliminarDoc')->name('eliminarDocumento');






