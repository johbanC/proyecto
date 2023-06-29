<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/**
 * Para que son las diferentes ruras
 * 
 * Route::get      | Consultar
 * Route::post     | guardar
 * Route::delete   | eliminar
 * Route::put      | actualizar
 * 
 * 
 */

/*
 EJEMPLO 1
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('blog', [PageController::class, 'blog'])->name('blog');

Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');
 */

/* EJEMPLO 2 UTILIZANDO GRUPOS PARA UN MISMO CONTROLADOR */

Route::controller(PageController::class)->group(function () {

  Route::get('/', 'home')->name('home');
  Route::get('blog', 'blog')->name('blog');
  Route::get('blog/{post:slug}', 'post')->name('post');
});
