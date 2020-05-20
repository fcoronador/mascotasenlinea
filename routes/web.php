<?php

use Illuminate\Support\Facades\Route;


Route::view('/','inicio')->name('inicio');
Route::view('/registro','registro')->name('registro'); 
Route::view('/quienes','quienes')->name('quienes'); 
Route::view('/login','login')->name('login');

Route::view('/PanelCliente','cliente.panel')->name('PanelC');
Route::view('/MiMascota','cliente.MascotaLista')->name('MascotaL');
Route::view('/MiMascota/Detalles','cliente.MascotaDetalles')->name('MascotaD');

Route::view('/contacto','inicio')->name('contacto'); 
Route::view('/citas','citas.citas')->name('citas'); 



Route::view('/crearmascota','crearmascota')->name('crearmascota');
Route::view('/PanelCliente','PanelC')->name('PanelC');
Route::view('/actualizar','actualizar')->name('actualizar');
