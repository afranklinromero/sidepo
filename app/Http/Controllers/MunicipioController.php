<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest; 
use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Support\Facades\Request;
use Illuminate\Pagination\LengthAwarePaginator;


/**
 * Class MunicipioController
 * @package App\Http\Controllers
 */
class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
    $municipios = Municipio::with('departamento')->get();

    $perPage = 10; // Número de elementos por página
    $currentPage = request()->input('page', 1); // Obtiene la página actual de la solicitud, por defecto es 1

    // Pagina manualmente la colección de municipios
    $i=0;
    $offset = ($currentPage - 1) * $perPage;
    $paginatedMunicipios = new LengthAwarePaginator(
        $municipios->slice($offset, $perPage),
        $municipios->count(),
        $perPage,
     
        $currentPage,
        [
            'path' => Request::url(), // URL actual
            'query' => Request::query(), // Parámetros de la consulta
        ]
    );

    return view('municipio.index', compact('paginatedMunicipios','i'));
}
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $departamentos = Departamento::all();
        $municipio = new Municipio();
        return view('municipio.create', compact('departamentos', 'municipio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(HttpRequest $request)
    {
        request()->validate(Municipio::$rules);

        $municipio = Municipio::create($request->all());

        return redirect()->route('municipios.index')
            ->with('success', 'Municipio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio = Municipio::find($id);

        return view('municipio.show', compact('municipio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = Departamento::all();
        $municipio = Municipio::find($id);

        return view('municipio.edit', compact('municipio', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Municipio $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(HttpRequest $request, Municipio $municipio)
    {
        request()->validate(Municipio::$rules);

        $municipio->update($request->all());

        return redirect()->route('municipios.index')
            ->with('success', 'Municipio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $municipio = Municipio::find($id)->delete();

        return redirect()->route('municipios.index')
            ->with('success', 'Municipio deleted successfully');
    }
}
