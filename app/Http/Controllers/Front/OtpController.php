<?php


namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SolicitudTramite;

class OtpController extends Controller
{
    public function form()
    {
        return view('solicitud.otp');
    }

    public function verificar(Request $request)
    {
        $request->validate([
            'otp' => 'required'
        ]);

        if ($request->otp != session('otp')) {
            return back()->with('error', 'OTP incorrecto');
        }

        $solicitud = SolicitudTramite::find(session('solicitud_id'));

        if (!$solicitud) {
            return redirect('/');
        }

        $solicitud->update([
            'telefono_verificado_at' => now()
        ]);

        return redirect()->route('cita.form');
    }
}