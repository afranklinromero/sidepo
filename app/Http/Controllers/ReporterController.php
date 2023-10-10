<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Debes importar la clase DB
use App\Models\User;
use App\Caso;

class ReporterController extends Controller
{
    public function index()
    {
        $casosPorAño = DB::table('casos')
        ->select(DB::raw('YEAR(fechahecho) as year'), DB::raw('COUNT(*) as count'))
        ->whereYear('fechahecho', '>=', 2001)
        ->groupBy(DB::raw('YEAR(fechahecho)'))
        ->orderBy(DB::raw('YEAR(fechahecho)'))
        ->get();


        return view('reporte.index', ['casosPorAño' => $casosPorAño]); // Usa el mismo nombre de variable
    }
}