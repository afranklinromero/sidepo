<?php

namespace App\Http\Controllers;

use App\Models\Caso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/**
 * Class CasoController
 * @package App\Http\Controllers
 */
class CasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
       
    }
    public function index()
    {
        $casos = Caso::paginate();

        return view('caso.index', compact('casos'))
            ->with('i', (request()->input('page', 1) - 1) * $casos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caso = new Caso();
        return view('caso.create', compact('caso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Caso::$rules);

        //$caso = Caso::create($request->all());


        $req = new Caso();
        $req->caso= $request->caso;
        $req->fecha= $request->fecha;
        $req->placa= $request->placa;
        $req->vehiculo= $request->vehiculo;
        $req->marca=$request->marca;
        $req->clase=$request->clase;
        $req->color=$request->color;
        $req->modelo=$request->modelo;
        $req->chasis=$request->chasis;
        $req->hecho=$request->hecho;
        $req->nombre=$request->nombre;
        $req->apaterno=$request->apaterno;
        $req->amaterno=$request->amaterno;
        $req->estado=$request->estado;
        $req->grupo_designado=$request->grupo_designado;
        $req->designado=$request->designado;
        $req->regional=$request->regional;
        $req->lugar=$request->lugar;
        $req->mes=$request->mes;
        $req->ano=$request->ano;
        $req->ci=$request->ci;
        $req->id_user=$request->id_user;

        $req->archivo= $request->archivo->store('public');
        
        $req->save();
   
        
        
        return redirect()->route('casos.index')
            ->with('success', 'Caso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caso = Caso::find($id);

        return view('caso.show', compact('caso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caso = Caso::find($id);

        return view('caso.edit', compact('caso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Caso $caso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caso $caso)
    {
        request()->validate(Caso::$rules);

        $caso->update($request->all());

        return redirect()->route('casos.index')
            ->with('success', 'Caso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caso = Caso::find($id)->delete();

        return redirect()->route('casos.index')
            ->with('success', 'Caso deleted successfully');
    }
}
