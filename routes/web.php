<?php

use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Registercontrollerdept;
use App\Http\Controllers\Registercontrolleringreso;
use App\Http\Controllers\Registercontrollertipodoc;
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

/*Route::get('/register', function () {
    return view('auth.register');
});*/


Route::get('/register', [Registercontroller::class,'show'] );
Route::post('/register', [Registercontroller::class,'register'] );

Route::get('/departamento', [Registercontrollerdept::class,'show'] );
Route::post('/departamento', [Registercontrollerdept::class,'departamento'] );

Route::get('/ingreso', [Registercontrolleringreso::class,'show'] );
Route::post('/ingreso', [Registercontrolleringreso::class,'ingreso'] );

Route::get('/tipodocumento', [Registercontrollertipodoc::class,'show'] );
Route::post('/tipodocumento', [Registercontrollertipodoc::class,'tipodocumento'] );

