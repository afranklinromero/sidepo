<?php

namespace App\Http\Controllers;

use App\Models\Archivodenuncia;
use App\Models\Caso;
use Illuminate\Http\Request;

/**
 * Class ArchivodenunciaController
 * @package App\Http\Controllers
 */
class ArchivodenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archivodenuncias = Archivodenuncia::paginate();
        
        return view('archivodenuncia.index', compact('archivodenuncias'))
            ->with('i', (request()->input('page', 1) - 1) * $archivodenuncias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $caso = Caso::find($id);
        $archivodenuncia = new Archivodenuncia();
        return view('archivodenuncia.create', compact('archivodenuncia', 'caso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 // Valida y guarda el modelo Archivodenuncia
 request()->validate(Archivodenuncia::$rules);

 $archivodenuncia = new Archivodenuncia();
 $archivodenuncia->tipo = $request->tipo;
 $archivodenuncia->id_caso = $request->id_caso;

 if ($request->hasFile('pdf')) {
     $archivo = $request->file('pdf');
     $nombreArchivo = time() . '.' . $archivo->getClientOriginalExtension();
     $archivo->storeAs('public/pdf', $nombreArchivo);
     $archivodenuncia->pdf = $nombreArchivo;
 }

 $archivodenuncia->save();
        

        $caso = Caso::find($request->id_caso);
       
        $caso->pdf = $request->pdf_data; // Reemplaza 'pdf' por el nombre del campo correcto
    
        $caso->save();
        return redirect()->route('casos.index')
            ->with('success', 'Archivodenuncia created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $archivodenuncia = Archivodenuncia::find($id);

        return view('archivodenuncia.show', compact('archivodenuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $archivodenuncia = Archivodenuncia::find($id);

        return view('archivodenuncia.edit', compact('archivodenuncia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Archivodenuncia $archivodenuncia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivodenuncia $archivodenuncia)
    {
        request()->validate(Archivodenuncia::$rules);

        $archivodenuncia->update($request->all());

        return redirect()->route('archivodenuncias.index')
            ->with('success', 'Archivodenuncia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
          // Obtener el archivo de denuncia por su ID
    $archivodenuncia = Archivodenuncia::findOrFail($id);

    // Verificar si se encontró el registro antes de acceder a las propiedades
    if ($archivodenuncia) {
        // Obtener la ruta completa del archivo PDF
        $rutaArchivo = storage_path('app/public/pdf/' . $archivodenuncia->pdf);

        // Verificar si el archivo existe
        if (file_exists($rutaArchivo)) {
            // Eliminar el archivo PDF
            unlink($rutaArchivo);
        }

        // Eliminar el registro de la base de datos
        $archivodenuncia->delete();

        // Redireccionar a una ruta específica o mostrar un mensaje de éxito
        return redirect()->route('casos.index')->with('success', 'Archivo de denuncia eliminado correctamente.');
    } else {
        // Manejar el caso en el que no se encontró el registro
        // Puedes redireccionar a una página de error o mostrar un mensaje apropiado
        return redirect()->route('casos.index')->with('error', 'No se encontró el archivo de denuncia.');
    }
    }
}
