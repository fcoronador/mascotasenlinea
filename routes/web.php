<?php


use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
=======

>>>>>>> 86cf83c8fcbab8b2f52a095f37fa9538bbaf9af6
Route::view('/','inicio')->name('inicio');
Route::get('/Citas','ControlCitas@index')->name('citas');
Route::get('/Servicios','ControlServicios@index')->name('servicios');

Route::view('/registro','registro')->name('registro'); 
Route::view('/contacto','inicio')->name('contacto'); 
Route::view('/quienes','quienes')->name('quienes'); 
Route::view('/login','login')->name('login');


Route::view('/PanelCliente','cliente.panel')->name('PanelC');
Route::view('/Actualizar','cliente.actualizar')->name('actualizar');

Route::view('/MiMascota/Detalles','cliente.MascotaDetalles')->name('MascotaD');//index
Route::view('/MiMascota','cliente.MascotaLista')->name('MascotaL');//show
Route::view('/Crearmascota','cliente.crearmascota')->name('crearmascota');//create


Route::get('/IndexCliente','ControlCliente@index')->name('indexcliente');
Route::get('/CrearCliente','ControlCliente@create')->name('crearcliente');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearCliente','ControlCliente@store')->name('guardarcliente');/* Recibe la data del $_REQUEST */
Route::get('/Cliente/{id}/','ControlCliente@show')->name('mostrarcliente');
Route::get('/Cliente/{id}/editar','ControlCliente@edit')->name('editarcliente');
Route::patch('/Cliente/{id}/actualizar','ControlCliente@update')->name('actualizarcliente');
Route::delete('/Cliente/{id}/eliminar','ControlCliente@destroy')->name('borrarcliente');



