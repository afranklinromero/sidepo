<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Valorada;

class ValoradaController extends Controller
{
    public function form()
        {
            return view('tramite.valorada');
        }    
public function validar(Request $request)
    {
        $request->validate([
            'codigo' => 'required'
        ]);

        $valorada = Valorada::where('codigo', $request->codigo)
            ->where('estado', 'disponible')
            ->first();

        if (!$valorada) {
            return back()->with('error', 'Código inválido o ya fue utilizado.');
        }

        $valorada->update([
            'estado' => 'reservada',
            'fecha_utilizacion' => now()
        ]);

        session([
            'valorada_id' => $valorada->id
        ]);

        return redirect()->route('tramite.solicitud.create');
    }
}