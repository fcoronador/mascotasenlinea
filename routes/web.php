<?php


use Illuminate\Support\Facades\Route;


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


Route::get('/IndexProcedimiento','ControlProcedimiento@index')->name('indexprocedi');
Route::get('/CrearProcedi','ControlProcedimiento@create')->name('crearprocedimiento');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearProcedi','ControlProcedimiento@store')->name('guardarprocedimiento');/* Recibe la data del $_REQUEST */
Route::get('/Procedimiento/{id}/','ControlProcedimiento@show')->name('mostrarprocedimiento');
Route::get('/Procedimiento/{id}/editar','ControlProcedimiento@edit')->name('editarprocedimiento');
Route::patch('/Procedimiento/{id}/actualizar','ControlProcedimiento@update')->name('actualizarprocedimiento');
Route::delete('/Procedimiento/{id}/eliminar','ControlProcedimiento@destroy')->name('borrarprocedimiento');
