<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    })
    ->middleware('auth');
    Auth::routes();

Route::get('/administrator',[AdminController::class,'index'])
->middleware('auth.admin')
->name('admin.index');



Route::get('denuncia',function(){
    return view('denuncia');
});

Route::resource('registros', RegistroController::class);


Route::get('/home', [HomeController::class, 'index'])->name('home');
