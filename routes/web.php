<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ArchivoController;
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
    if(auth()->user()->role=='admin') {
        return view('administrator');
    }else{
        return view('welcome');
    }})
    ->middleware('auth');
    Auth::routes();
Route::get('/administrator',[AdminController::class,'index']);
Route::resource('registros', RegistroController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('casos', CasoController::class);
//Route::get('casos/{id}', function ($id){
//$caso= App\Caso::find($id);
//return "{$id}";
//});
//view('pdf', [    'caso'=>$caso]);})->name('pdf');


Route::resource('archivos', ArchivoController::class) ;



