<?php


use Illuminate\Support\Facades\Route;

Route::view('/','inicio')->name('inicio');
Route::view('/contacto','inicio')->name('contacto'); 
Route::view('/quienes','quienes')->name('quienes'); 

Route::post('/','ControlAuth@RegistroCliente')->name('registrocliente');
Route::post('/login','ControlAuth@Login')->name('login');
Route::get('/logout','ControlAuth@Logout')->name('logout');

Route::get('/Admin','ControlPanelAdmin@index')->name('administracion');
Route::get('/Vet','ControlPanelVet@index')->name('veterinario');
Route::get('/Usuario','ControlPanelClien@index')->name('usuario');

Route::get('/HistoriaClinica{id}','ControlHistoria@index')->name('historia');

Route::view('/Actualizar','cliente.actualizar')->name('actualizar');
Route::view('/MiMascota/Detalles','cliente.MascotaDetalles')->name('MascotaD');//index
Route::view('/MiMascota','cliente.MascotaLista')->name('MascotaL');//show
Route::view('/Crearmascota','cliente.crearmascota')->name('crearmascota');//create



Route::get('/Servicios','ControlServicios@index')->name('servicios');
Route::get('/CrearServicio','ControlServicios@create')->name('crearservicio');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearServicio','ControlServicios@store')->name('guardarservicio');/* Recibe la data del $_REQUEST */
Route::get('/Servicios/{id}/','ControlServicios@show')->name('mostrarservicio');
Route::get('/Servicios/{id}/editar','ControlServicios@edit')->name('editarservicio');
Route::patch('/Servicios/{id}/actualizar','ControlServicios@update')->name('actualizarservicio');
Route::delete('/Servicios/{id}/eliminar','ControlServicios@destroy')->name('borrarservicio');


Route::get('/Veterinarios','ControlVeterinarios@index')->name('indexveterinarios');
Route::get('/CrearVeterinario','ControlVeterinarios@create')->name('crearveterinario');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearVeterinario','ControlVeterinarios@store')->name('guardarveterinario');/* Recibe la data del $_REQUEST */
Route::get('/Veterinarios/{id}/','ControlVeterinarios@show')->name('mostrarveterinario');
Route::get('/Veterinarios/{id}/editar','ControlVeterinarios@edit')->name('editarveterinario');
Route::patch('/Veterinarios/{id}/actualizar','ControlVeterinarios@update')->name('actualizarveterinario');
Route::delete('/Veterinarios/{id}/eliminar','ControlVeterinarios@destroy')->name('borrarveterinario');


//Route::get('/Citas','ControlCitas@index')->name('citas');
//Route::get('/CrearCita','ControlCitas@create')->name('crearcita');
Route::post('/CrearCita','ControlCitas@store')->name('guardarcita');
Route::get('/Citas/{id}/','ControlCitas@show')->name('mostrarcita');
Route::get('/Citas/{idCita}/editar','ControlCitas@edit')->name('editarcita');
Route::patch('/Citas/{id}/actualizar','ControlCitas@update')->name('actualizarcita');
Route::delete('/Citas/{idCita}/eliminar','ControlCitas@destroy')->name('borrarcita');

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
Route::get('/CrearProcedimiento','ControlProcedimiento@create')->name('crearprocedimiento');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearProcedimiento','ControlProcedimiento@store')->name('guardarprocedimiento');/* Recibe la data del $_REQUEST */
Route::get('/Procedimientos/{id}/','ControlProcedimiento@show')->name('mostrarprocedimiento');
Route::get('/Procedimientos/{id}/editar','ControlProcedimiento@edit')->name('editarprocedimiento');
Route::patch('/Procedimientos/{id}/actualizar','ControlProcedimiento@update')->name('actualizarprocedimiento');
Route::delete('/Procedimientos/{id}/eliminar','ControlProcedimiento@destroy')->name('borrarprocedimiento');


Route::get('/IndexExamen','ControlExamenes@index')->name('indexexamen');
Route::get('/CrearExamen','ControlExamenes@create')->name('crearexamen');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearExamen','ControlExamenes@store')->name('guardarexamen');/* Recibe la data del $_REQUEST */
Route::get('/Examenes/{id}/','ControlExamenes@show')->name('mostrarexamen');
Route::get('/Examenes/{id}/editar','ControlExamenes@edit')->name('editarexamen');
Route::patch('/Examenes/{id}/actualizar','ControlExamenes@update')->name('actualizarexamen');
Route::delete('/Examenes/{id}/eliminar','ControlExamenes@destroy')->name('borrarexamen');


Route::get('/IndexDesparacitacion','ControlDesparacitacion@index')->name('indexdespara');
Route::get('/CrearDesparacitacion','ControlDesparacitacion@create')->name('creardesparacitacion');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearDesparacitacion','ControlDesparacitacion@store')->name('guardardesparacitacion');/* Recibe la data del $_REQUEST */
Route::get('/Desparacitacion/{id}/','ControlDesparacitacion@show')->name('mostrardesparacitacion');
Route::get('/Desparacitacion/{id}/editar','ControlDesparacitacion@edit')->name('editardesparacitacion');
Route::patch('/Desparacitacion/{id}/actualizar','ControlDesparacitacion@update')->name('actualizardesparacitacion');
Route::delete('/Desparacitacion/{id}/eliminar','ControlDesparacitacion@destroy')->name('borrardesparacitacion');


Route::get('/IndexVacunas','ControlVacunas@index')->name('indexvacuna');
Route::get('/CrearVacunas','ControlVacunas@create')->name('crearvacuna');/* Sale data en el POST->$_REQUEST */
Route::post('/CrearVacunas','ControlVacunas@store')->name('guardarvacuna');/* Recibe la data del $_REQUEST */
Route::get('/Vacunas/{id}/','ControlVacunas@show')->name('mostrarvacuna');
Route::get('/Vacunas/{id}/editar','ControlVacunas@edit')->name('editarvacuna');
Route::patch('/Vacunas/{id}/actualizar','ControlVacunas@update')->name('actualizarvacuna');
Route::delete('/Vacunas/{id}/eliminar','ControlVacunas@destroy')->name('borrarvacuna');