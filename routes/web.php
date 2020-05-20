<?php

use Illuminate\Support\Facades\Route;


Route::view('/','inicio')->name('inicio'); 
Route::view('/contacto','inicio')->name('contacto'); 
Route::view('/citas','citas.citas')->name('citas'); 



Route::view('/crearmascota','crearmascota')->name('crearmascota');
Route::view('/PanelCliente','PanelC')->name('PanelC');
Route::view('/actualizar','actualizar')->name('actualizar');
