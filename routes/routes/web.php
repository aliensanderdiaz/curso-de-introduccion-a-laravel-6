<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Forma como lo hace laravel cuando genera el proyecto
Route::get('/', function () {
    return view('welcome');
});

// // retornar una vista pero en un sola linea
// Route::view('prueba-vista', 'welcome');

// // retornar una vista pero en un sola linea con datos
// Route::view('prueba-vista-2', 'welcome', ['username' => 'Alex']);

// // retornando solo texto
// Route::get('prueba', function () {
//     return 'hola';
// });

// Con esta linea y la siguiente linea en el terminal
// php artisan make:controller PageController
// Creamos el controlador, pero tambien podemos ver 7 rutas
// php artisan route:list
// pero el controlador no tiene los 7 metodos

// Eliminamos el archivo del controlador
// si el comando es
// php artisan make:controller PageController --resource
// el controlador ya aparece con los 7 metodos, pero sin la logica.
// Ademas se crea el modelo y se relaciona con el controlador
Route::resource('pages', 'PageController');


