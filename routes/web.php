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


Route::get('/IndexProcedimiento','ControlProcedimiento@index')->name('indexprocedi');
Route::get('/CrearProcedi','ControlProcedimiento@create')->name('crearprocedimiento');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearProcedi','ControlProcedimiento@store')->name('guardarprocedimiento');/* Recibe la data del $_REQUEST */
Route::get('/Procedimientos/{id}/','ControlProcedimiento@show')->name('mostrarprocedimiento');
Route::get('/Procedimientos/{id}/editar','ControlProcedimiento@edit')->name('editarprocedimiento');
Route::patch('/Procedimientos/{id}/actualizar','ControlProcedimiento@update')->name('actualizarprocedimiento');
Route::delete('/Procedimientos/{id}/eliminar','ControlProcedimiento@destroy')->name('borrarprocedimiento');


Route::get('/IndexExamen','ControlExamenes@index')->name('indexexamenes');
Route::get('/CrearExamen','ControlExamenes@create')->name('crearexamen');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearExamen','ControlExamenes@store')->name('guardarexamen');/* Recibe la data del $_REQUEST */
Route::get('/Examenes/{id}/','ControlExamenes@show')->name('mostrarexamen');
Route::get('/Examenes/{id}/editar','ControlExamenes@edit')->name('editarexamen');
Route::patch('/Examenes/{id}/actualizar','ControlExamenes@update')->name('actualizarexamen');
Route::delete('/Examenes/{id}/eliminar','ControlExamenes@destroy')->name('borrarexamen');


Route::get('/IndexDesparacitacion','ControlDesparacitacion@index')->name('indexdesparas');
Route::get('/CrearDesparacitacion','ControlDesparacitacion@create')->name('creardesparacitacion');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearDesparacitacion','ControlDesparacitacion@store')->name('guardardesparacitacion');/* Recibe la data del $_REQUEST */
Route::get('/Desparacitacion/{id}/','ControlDesparacitacion@show')->name('mostrardesparacitacion');
Route::get('/Desparacitacion/{id}/editar','ControlDesparacitacion@edit')->name('editardesparacitacion');
Route::patch('/Desparacitacion/{id}/actualizar','ControlDesparacitacion@update')->name('actualizardesparacitacion');
Route::delete('/Desparacitacion/{id}/eliminar','ControlDesparacitacion@destroy')->name('borrardesparacitacion');