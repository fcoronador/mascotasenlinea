<?php


use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('inicio');
Route::view('/Admin','admin.Admin')->name('administracion');
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


//Route::get('/Citas','ControlCitas@index')->name('citas');
//Route::get('/CrearCita','ControlCitas@create')->name('crearcita');
Route::post('/CrearCita','ControlCitas@store')->name('guardarcita');
Route::get('/Citas/{id}/','ControlCitas@show')->name('mostrarcita');
Route::get('/Citas/{id}/editar','ControlCitas@edit')->name('editarcita');
Route::patch('/Citas/{id}/actualizar','ControlCitas@update')->name('actualizarcita');
Route::delete('/Citas/{id}/eliminar','ControlCitas@destroy')->name('borrarcita');

Route::get('/IndexCliente','ControlCliente@index')->name('indexcliente');
Route::get('/CrearCliente','ControlCliente@create')->name('crearcliente');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearCliente','ControlCliente@store')->name('guardarcliente');/* Recibe la data del $_REQUEST */
Route::get('/Cliente/{id}/','ControlCliente@show')->name('mostrarcliente');
Route::get('/Cliente/{id}/editar','ControlCliente@edit')->name('editarcliente');
Route::patch('/Cliente/{id}/actualizar','ControlCliente@update')->name('actualizarcliente');
Route::delete('/Cliente/{id}/eliminar','ControlCliente@destroy')->name('borrarcliente');

Route::get('/IndexMascota','ControlMascota@index')->name('indexmascota');
Route::get('/CrearMascota','ControlMascota@create')->name('crearmascota');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearMascota','ControlMascota@store')->name('guardarmascota');/* Recibe la data del $_REQUEST */
Route::get('/Mascota/{id}/','ControlMascota@show')->name('mostrarmascota');
Route::get('/Mascota/{id}/editar','ControlMascota@edit')->name('editarmascota');
Route::patch('/Mascota/{id}/actualizar','ControlMascota@update')->name('actualizarmascota');
Route::delete('/Mascota/{id}/eliminar','ControlMascota@destroy')->name('borrarmascota');


Route::get('/IndexControl','ControlContro@index')->name('indexcontrol');
Route::get('/CrearControl','ControlContro@create')->name('crearcontrol');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearControl','ControlContro@store')->name('guardarcontrol');/* Recibe la data del $_REQUEST */
Route::get('/Control/{id}/','ControlContro@show')->name('mostrarcontrol');
Route::get('/Control/{id}/editar','ControlContro@edit')->name('editarcontrol');
Route::patch('/Control/{id}/actualizar','ControlContro@update')->name('actualizarcontrol');
Route::delete('/Control/{id}/eliminar','ControlContro@destroy')->name('borrarcontrol');



