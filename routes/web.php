<?php

use Illuminate\Support\Facades\Route;


Route::view('/','inicio')->name('inicio');
Route::view('/registro','registro')->name('registro'); 
Route::view('/quienes','quienes')->name('quienes'); 
Route::view('/login','login')->name('login');

Route::view('/PanelCliente','PanelC')->name('PanelC');
Route::view('/MiMascota','MascotaLista')->name('MascotaL');
Route::view('/MiMascota/Detalles','MascotaDetalles')->name('MascotaD');
Route::view('/','inicio')->name('inicio'); 
Route::view('/contacto','inicio')->name('contacto'); 
Route::view('/citas','citas.citas')->name('citas'); 



