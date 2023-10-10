<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ArchivodenunciaController;
use App\Http\Controllers\ModelHasRoleController;
use App\Http\Controllers\SeguimientoController;
use App\Http\Controllers\ReporterController;
use App\Http\Controllers\QRCodeController;
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
Route::get('/ver', [CasoController::class, 'ver'])->name('casos.ver');
Route::get('/conpdf', [CasoController::class, 'conpdf'])->name('casos.conpdf');
Route::get('/sinpdf', [CasoController::class, 'sinpdf'])->name('casos.sinpdf');
Route::get('/archivodenuncias', [ArchivodenunciaController::class, 'index'])->name('archivodenuncias.index');
Route::get('/archivodenuncias/{casos}/create', [ArchivodenunciaController::class, 'create'])->name('archivodenuncias.create');
Route::post('/archivodenuncias', [ArchivodenunciaController::class, 'store'])->name('archivodenuncias.store');
Route::get('/archivodenuncias/{archivodenuncia}', [ArchivodenunciaController::class, 'show'])->name('archivodenuncias.show');
Route::get('/archivodenuncias/{archivodenuncia}/edit', [ArchivodenunciaController::class, 'edit'])->name('archivodenuncias.edit');
Route::put('/archivodenuncias/{archivodenuncia}', [ArchivodenunciaController::class, 'update'])->name('archivodenuncias.update');
Route::delete('/archivodenuncias/{archivodenuncia}', [ArchivodenunciaController::class, 'destroy'])->name('archivodenuncias.destroy');
Route::resource('archivos', ArchivoController::class) ;
Route::resource('departamentos', DepartamentoController::class);
Route::resource('municipios', MunicipioController::class);
Route::resource('model-has-roles', ModelHasRoleController::class);
Route::resource('users', UserController::class);
Route::resource('seguimientos', SeguimientoController::class);
Route::middleware(['web'])->group(function () {
Route::get('qrcode/generate', [QRCodeController::class, 'generate'])->name('qrcode.generate');
Route::get('/reportes', [ReporterController::class, 'index']);
});

