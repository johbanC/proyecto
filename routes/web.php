<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('blog', function () {
    //consulta a base de datos

$posts =[
    ['id' => 1, 'title' => 'PHP',  'slug' => 'php'],
    ['id' => 2, 'title' => 'Laravel',  'slug' => 'laravel']
];

    return view('blog', ['posts' => $posts]);
})->name('blog');

Route::get('blog/{slug}', function ($slug) {
    //consulta a base de datos

    $post = $slug;
    
    return view('post', ['post' => $post]);

})->name('post');

