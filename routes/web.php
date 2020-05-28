<?php

use Illuminate\Support\Facades\Route;

Route::get('/','ControlCliente@index')->name('inicio');



Route::view('/registro','registro')->name('registro'); 
Route::view('/contacto','inicio')->name('contacto'); 
Route::view('/quienes','quienes')->name('quienes'); 
Route::view('/login','login')->name('login');

Route::view('/PanelCliente','cliente.panel')->name('PanelC');
Route::view('/Actualizar','cliente.actualizar')->name('actualizar');
Route::view('/Citas','citas.citas')->name('citas'); 
Route::view('/MiMascota/Detalles','cliente.MascotaDetalles')->name('MascotaD');//index
Route::view('/MiMascota','cliente.MascotaLista')->name('MascotaL');//show
Route::view('/Crearmascota','cliente.crearmascota')->name('crearmascota');//create




