<?php
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SolicitudTramite;

class SolicitudController extends Controller
{
 public function create()
{
    if (!session()->has('valorada_id')) {
        return redirect()->route('tramite.solicitud.create_step1');
    }

    return view('tramite.solicitud');
}
public function form()
    {
        if (!session()->has('valorada_id')) {
            return redirect('/');
        }

        return view('solicitud.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'ci' => 'required',
            'telefono' => 'required'
        ]);

        $solicitud = SolicitudTramite::create([
            'valorada_id' => session('valorada_id'),
            'nombre' => $request->nombre,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'ci' => $request->ci,
            'telefono' => $request->telefono,
            'estado' => 'registrada'
        ]);

       // $otp = rand(100000, 999999);

        session([
            'solicitud_id' => $solicitud->id,
        //    'otp' => $otp
        ]);

        // Aquí luego conectas WhatsApp API
        // enviarOtp($request->telefono, $otp);

        return redirect()->route('tramite.cita.form');
    }
}