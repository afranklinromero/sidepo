<?php

namespace App\Http\Controllers\Valores;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Valorada;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\TipoTramite;
use Illuminate\Support\Str;

class AdminValoradaController extends Controller{ 
    public function index()
    {
        $valoradas = Valorada::latest()->paginate(20);

        return view('valores.valoradas.index', compact('valoradas'));
    }

    public function create()
    {
        $departamentos = Departamento::all();
        $municipios = Municipio::all();
        $tipos = TipoTramite::all();

        return view('valores.valoradas.create', compact(
            'departamentos',
            'municipios',
            'tipos'
        ));
    }

   public function store(Request $request)
{
    $request->validate([
        'codigo' => 'required|max:50|unique:valoradas,codigo',
        'departamento_id' => 'required',
        'municipio_id' => 'required',
        'tipo_tramite_id' => 'required'
    ]);

    Valorada::create([
        'codigo' => strtoupper(trim($request->codigo)),
        'departamento_id' => $request->departamento_id,
        'municipio_id' => $request->municipio_id,
        'tipo_tramite_id' => $request->tipo_tramite_id,
        'estado' => 'disponible',
        'user_id' => auth()->id()
    ]);

    return redirect()->route('valoradas.index')
        ->with('success', 'Valorada creada correctamente');
}
public function destroy(Valorada $valorada)
{
    // Seguridad extra (doble capa además de middleware)
    if (!auth()->user()->hasRole('admin')) {
        abort(403, 'No autorizado');
    }

    // Opcional: evitar eliminar si ya fue usada
    if ($valorada->estado !== 'disponible') {
        return back()->with('error', 'Solo se pueden eliminar valoradas disponibles.');
    }

    $valorada->delete();

    return redirect()
        ->route('valoradas.index')
        ->with('success', 'Valorada eliminada correctamente');
}
}