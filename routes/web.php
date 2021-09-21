<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/vista-directa', 'vista', ['nombre' => 'Benji']);

Route::get('/nueva', function (Request $request) {
    return "Hola variable: ". $request->get('variable');

});

Route::get('/controladores', [PruebaController::class, 'mostrar']); 

Route::get('/parametros/{variable}', [PruebaController::class, 'parametros']); 

Route::get('/blog/{slug}/{id?}', [PruebaController::class, 'blog']); 

