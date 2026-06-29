<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    public function form()
        {
            $fechasDisponibles = [];

            for ($i = 1; $i <= 15; $i++) {

                $fecha = now()->addDays($i)->toDateString();

                $fechasDisponibles[] = $fecha;
            }

            return view('cita.form', compact('fechasDisponibles'));
        }
  public function store(Request $request)
{
    $request->validate([
        'fecha' => 'required|date',
        'turno' => 'required|in:manana,tarde',
    ]);

    $solicitudId = session('solicitud_id');

    if (!$solicitudId) {
        return redirect()->route('tramite.solicitud.create');
    }

    try {

        $cita = DB::transaction(function () use ($request, $solicitudId) {

            $ocupados = Cita::whereDate('fecha', $request->fecha)
                ->where('turno', $request->turno)
                ->lockForUpdate()
                ->count();

            if ($ocupados >= 25) {
                throw new \Exception('Sin cupos disponibles para esta fecha y turno');
            }

            return Cita::create([
                'solicitud_tramite_id' => $solicitudId,
                'fecha' => $request->fecha,
                'turno' => $request->turno,
                'numero_ficha' => $ocupados + 1,
                'estado' => 'programada'
            ]);

        });

        return redirect()->route('tramite.cita.ok', $cita->id);

    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }

}

   public function ok($id)
{
    $cita = Cita::with('solicitudTramite')->findOrFail($id);

    return view('cita.ok', compact('cita'));
}
public function disponibilidad(Request $request)
{
    $request->validate([
        'fecha' => 'required|date'
    ]);

    $limite = 25;

    $manana = Cita::whereDate('fecha', $request->fecha)
        ->where('turno', 'manana')
        ->count();

    $tarde = Cita::whereDate('fecha', $request->fecha)
        ->where('turno', 'tarde')
        ->count();

    return response()->json([
        'manana_cupos' => max($limite - $manana, 0),
        'tarde_cupos' => max($limite - $tarde, 0),

        'manana_disponible' => $manana < $limite,
        'tarde_disponible' => $tarde < $limite,
    ]);
}


}