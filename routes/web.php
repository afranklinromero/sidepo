<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\CasoController;
use App\Http\Controllers\ArchivoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\ArchivodenunciaController;
use App\Http\Controllers\ModelHasRoleController;
use App\Http\Controllers\SeguimientoController;
use App\Http\Controllers\ReporterController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\TipoTramiteController;

use App\Http\Controllers\Valores\AdminValoradaController;
use App\Http\Controllers\Front\ValoradaController as FrontValoradaController;
use App\Http\Controllers\Front\SolicitudController;
use App\Http\Controllers\Front\OtpController;
use App\Http\Controllers\Front\CitaController;

/*
|--------------------------------------------------------------------------
| RUTAS PÚBLICAS
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    if (!auth()->check()) {
        return view('welcome');
    }

    if (auth()->user()->hasRole('admin')) {
        return view('administrator');
    }

    return view('menu');
});

Route::get('/login', function () {
    return view('auth.login');
});



Auth::routes();

/*
|--------------------------------------------------------------------------
| RUTAS PROTEGIDAS
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])
        ->name('home');

    /*
    |--------------------------------------------------------------------------
    | VALORES
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:valores|admin'])->group(function () {

        Route::get('/valores', [AdminValoradaController::class, 'index'])
            ->name('valores.index');

        Route::resource('valores/valoradas', AdminValoradaController::class);
      
    });

    /*
    |--------------------------------------------------------------------------
    | ADMINISTRACIÓN
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin'])->group(function () {

        Route::get('/administrator', [AdminController::class, 'index']);

        Route::resource('users', UserController::class);
        Route::resource('model-has-roles', ModelHasRoleController::class);
        Route::resource('departamentos', DepartamentoController::class);
        Route::resource('municipios', MunicipioController::class);

    });

    /*
    |--------------------------------------------------------------------------
    | VENTANILLA
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin|ventanilla|director'])->group(function () {

        Route::resource('registros', RegistroController::class);

    });

    /*
    |--------------------------------------------------------------------------
    | DENUNCIAS
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin|denuncia|director'])->group(function () {

        Route::resource('casos', CasoController::class);

        Route::get('/ver', [CasoController::class, 'ver'])
            ->name('casos.ver');

        Route::get('/conpdf', [CasoController::class, 'conpdf'])
            ->name('casos.conpdf');

        Route::get('/sinpdf', [CasoController::class, 'sinpdf'])
            ->name('casos.sinpdf');

        Route::resource('archivodenuncias', ArchivodenunciaController::class);
        Route::resource('archivos', ArchivoController::class);

    });

    /*
    |--------------------------------------------------------------------------
    | SEGUIMIENTO
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin|seguimiento|director'])->group(function () {

        Route::resource('seguimientos', SeguimientoController::class);

    });

    /*
    |--------------------------------------------------------------------------
    | REPORTES
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin|director'])->group(function () {

        Route::get('/reportes', [ReporterController::class, 'index'])
            ->name('reportes.index');

    });

    /*
    |--------------------------------------------------------------------------
    | QR
    |--------------------------------------------------------------------------
    */

    Route::middleware(['role:admin|director'])->group(function () {

        Route::get('/qrcode/generate', [QRCodeController::class, 'generate'])
            ->name('qrcode.generate');

    });


    /*
    |--------------------------------------------------------------------------
    | TIPO TRÁMITE 
    |--------------------------------------------------------------------------
    */
    Route::middleware(['role:admin|director'])->group(function () {

        Route::resource('tipos-tramites', TipoTramiteController::class);

    });
    /*
    |--------------------------------------------------------------------------
    | TRÁMITE VEHICULAR
    |--------------------------------------------------------------------------
    */



});


Route::prefix('tramite')->name('tramite.')->group(function () {

    // 🔓 INICIO DEL FLUJO
    Route::get('/valorada', [FrontValoradaController::class, 'form'])
        ->name('valorada.form');

    Route::post('/valorada/validar', [FrontValoradaController::class, 'validar'])
        ->name('valorada.validar');

    Route::get('/solicitud', [SolicitudController::class, 'create'])
        ->name('solicitud.create');

    Route::post('/solicitud', [SolicitudController::class, 'store'])
        ->name('solicitud.store');

    //Route::get('/otp', [OtpController::class, 'form'])
    //    ->name('otp.form');

   // Route::post('/otp', [OtpController::class, 'verify'])
   //     ->name('otp.verify');

    // 🔒 CITAS
    Route::middleware('tramite.flow')->group(function () {

        Route::get('/cita', [CitaController::class, 'form'])
            ->name('cita.form');

        Route::post('/cita', [CitaController::class, 'store'])
            ->name('cita.store');

        Route::get('/cita/{id}/ok', [CitaController::class, 'ok'])
            ->name('cita.ok');

            Route::get('/cita/disponibilidad', [CitaController::class, 'disponibilidad'])
    ->name('cita.disponibilidad');
    });

});