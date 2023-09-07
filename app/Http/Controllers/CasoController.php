<?php

namespace App\Http\Controllers;

use App\Models\Caso;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Seguimiento;
use App\Models\Archivodenuncia;
use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Illuminate\Support\Facades\Storage;
use Dompdf\Dompdf;
use PDF;
use Codedge\Fpdf\Fpdf\Fpdf;

use Intervention\Image\Facades\Image;
use App\Http\Controllers\QRCodeController;


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
    public function index(Request $request)
    {
        $user = auth()->user();
        
        $allowedUserIds = [1, 4];
        $busquedaPor = $request->get('busqueda_por');
        $terminoBusqueda = $request->get('termino_busqueda');
    
        $casos = Caso::where('id_user', $user->id);

    // Si el usuario es el administrador (usuario 1) o el usuario de seguimiento (usuario 4), mostrar todos los casos
    if (in_array($user->id, [1, 4, 39])) {
        $casos->orWhereRaw('1=1'); // Esto agrega una condición siempre verdadera para incluir todos los casos
    } else {
        // Si el usuario es miembro del grupo 'jefe_montero', mostrar casos con 'lugar' igual a 'montero'
        if ($user->grupo === 'MONTERO') {
            $casos->orWhere('lugar', 'MONTERO');
        }
        if ($user->grupo === 'YAPACANI') {
            $casos->orWhere('lugar', 'YAPACANI');
        }if ($user->grupo === 'PUERTO SUAREZ') {
            $casos->orWhere('lugar', 'PUERTO SUAREZ');
        }
        if ($user->grupo === 'SAN IGNACIO DE VELASCO') {
            $casos->orWhere('lugar', 'SAN IGNACIO DE VELASCO');
        }
        if ($user->grupo === 'WARNES') {
            $casos->orWhere('lugar', 'WARNES');
        }
        if ($user->grupo === 'LA GUARDIA') {
            $casos->orWhere('lugar', 'LA GUARDIA');
        }
        if ($user->grupo === 'COTOCA') {
            $casos->orWhere('lugar', 'COTOCA');
        }
        if ($user->grupo === 'JEFEALFA') {
            $casos->orWhere('lugar', 'JEFEALFA');
        }
        if ($user->grupo === 'JEFEBETABRAVO') {
            $casos->orWhere(function ($query) {
                $query->where('lugar', 'BETA')
                      ->orWhere('lugar', 'BRAVO');
            });
        }
        if ($user->grupo === 'JEFEALFA') {
            $casos->orWhere('lugar', 'JEFEALFA');
        }
        if ($user->grupo === 'JEFEALFA') {
            $casos->orWhere('lugar', 'JEFEALFA');
        }

        // Aquí puedes agregar condiciones adicionales para filtrar casos por región u otros criterios según tu lógica de negocio
        // Por ejemplo, si tienes una columna 'region' en la tabla 'casos':
        // $casos->orWhere('region', $user->region);
    }
    $casos->orderBy('id', 'DESC');
        if ($busquedaPor === 'caso') {
            $casos->caso($terminoBusqueda);
        } elseif ($busquedaPor === 'nombre') {
            $casos->nombre($terminoBusqueda);
        }
        elseif ($busquedaPor === 'apaterno') {
            $casos->apaterno($terminoBusqueda);
        }
        elseif ($busquedaPor === 'fecha_denuncia') {
            $casos->fecha_denuncia($terminoBusqueda);
        }
        elseif ($busquedaPor === 'placa') {
            $casos->placa($terminoBusqueda);
        }
        elseif ($busquedaPor === 'vehiculo') {
            $casos->vehiculo($terminoBusqueda);
        }
        elseif ($busquedaPor === 'marca') {
            $casos->marca($terminoBusqueda);
        }
        elseif ($busquedaPor === 'tipo') {
            $casos->tipo($terminoBusqueda);
        }
        elseif ($busquedaPor === 'color') {
            $casos->color($terminoBusqueda);
        }
        elseif ($busquedaPor === 'modelo') {
            $casos->modelo($terminoBusqueda);
        }
        elseif ($busquedaPor === 'chasis') {
            $casos->chasis($terminoBusqueda);
        }
        elseif ($busquedaPor === 'hecho') {
            $casos->hecho($terminoBusqueda);
        }
        elseif ($busquedaPor === 'amaterno') {
            $casos->amaterno($terminoBusqueda);
        }
        elseif ($busquedaPor === 'estado') {
            $casos->estado($terminoBusqueda);
        }
        elseif ($busquedaPor === 'grupo_designado') {
            $casos->grupo_designado($terminoBusqueda);
        }
        elseif ($busquedaPor === 'regional') {
            $casos->regional($terminoBusqueda);
        }
        elseif ($busquedaPor === 'asignado') {
            $casos->asignado($terminoBusqueda);
        }
        elseif ($busquedaPor === 'lugar') {
            $casos->lugar($terminoBusqueda);
        }
        elseif ($busquedaPor === 'ci') {
            $casos->ci($terminoBusqueda);
        }
        elseif ($busquedaPor === 'fechahecho') {
            $casos->fechahecho($terminoBusqueda);
        }
       
        $casos = $casos ->paginate();
        
		
		
	
    
       $municipios = Municipio::pluck('nombre', 'id');
    
        return view('caso.index', compact('casos', 'municipios'))
            ->with('i', ($casos->currentPage() - 1) * $casos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         
        $departamentos = Departamento::paginate();
        $municipios = Municipio::paginate();
        $users = User::all();
        $caso = new Caso();
        
        if (request()->ajax()) {
        $municipios = Municipio::when(request()->input('departamento_id'), function($query) {
            $query->where('departamento_id', request()->input('departamento_id'));
        })->pluck('nombre', 'id');
    
        return response()->json($municipios);
        }
        return view('caso.create', compact('users','caso','departamentos','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // request()->validate(
       //     ['archivo'=>'required|pdf|mimes:pdf|max:5000']
       // );

        //$caso = Caso::create($request->all());


      

        $caso = strtoupper($request->caso);
            $existingCaso = Caso::where('caso', $caso)->first();
            if ($existingCaso) {
                return redirect()->back()->with('error', 'El caso ya está registrado.');
            } else {    
        $req = new Caso();
        $req->caso= $caso;
        $req->placa= (strtoupper($request->placa));
        $req->vehiculo= (strtoupper($request->vehiculo));
        $req->marca=(strtoupper($request->marca));
        $req->tipo=(strtoupper($request->tipo));
        $req->color=(strtoupper($request->color));
        $req->modelo=$request->modelo;
        $req->chasis=(strtoupper($request->chasis));
        $req->hecho=(strtoupper($request->hecho));
        $req->nombre=(strtoupper($request->nombre));
        $req->apaterno=(strtoupper($request->apaterno));
        $req->amaterno=(strtoupper($request->amaterno));
        $req->estado=(strtoupper($request->estado));
        $req->fecha_denuncia=$request->fecha_denuncia;
        $req->grupo_designado=(strtoupper($request->grupo_designado));
        $req->asignado=(strtoupper($request->asignado));
        $req->regional=(strtoupper($request->departamento_id));
        $req->detalle=(strtoupper($request->detalle));
       
        $req->lugar=(strtoupper($request->municipio_id));
        $req->fechahecho=$request->fechahecho;
        $req->ci=$request->ci;
        $req->id_user=$request->id_user;

     
        //$req->archivo= $request->archivo->store('public');
        
        $req->save();
   
        
        
        return redirect()->route('casos.index')
            ->with('success', 'Caso created successfully.');

        }      
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
        $val = $caso->regional;
        $departamentos = Departamento::where('id', $val)->get();
        $val2 = $caso->lugar;
        $municipios = Municipio::where('id', $val2)->get();
        $archivodenuncias = Archivodenuncia::where('id_caso', $id)->get();
        $users = User::pluck('name', 'id');
        $seguimiento = $caso;
       
       
        return view('caso.show', compact('seguimiento','users', 'caso', 'departamentos', 'municipios', 'val2', 'archivodenuncias'));
    
    }  
          
         
  
    /**
     * Show the form for editing the specified resource.->first();
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caso = Caso::find($id);
        $departamentos = Departamento::paginate();
        $municipios = Municipio::paginate();
        if (request()->ajax()) {
            $municipios = Municipio::when(request()->input('departamento_id'), function($query) {
                $query->where('departamento_id', request()->input('departamento_id'));
            })->pluck('nombre', 'id');
        
            return response()->json($municipios);
        }
        $users = User::pluck('apellido', 'id')->toArray();

        
        return view('caso.edit',compact('users','caso','departamentos','municipios'));
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
      
        $caso->ci= $request->ci;
        $caso->id_user=$request->id_user;
        $caso->caso= (strtoupper($request->caso));
        $caso->placa= (strtoupper($request->placa));
        $caso->vehiculo= (strtoupper($request->vehiculo));
        $caso->marca=(strtoupper($request->marca));
        $caso->tipo=(strtoupper($request->tipo));
        $caso->color=(strtoupper($request->color));
        $caso->modelo=$request->modelo;
        $caso->chasis=(strtoupper($request->chasis));
        $caso->hecho=(strtoupper($request->hecho));
        $caso->nombre=(strtoupper($request->nombre));
        $caso->apaterno=(strtoupper($request->apaterno));
        $caso->amaterno=(strtoupper($request->amaterno));
        $caso->estado=(strtoupper($request->estado));
        $caso->fecha_denuncia=$request->fecha_denuncia;
        $caso->grupo_designado=(strtoupper($request->grupo_designado));
        $caso->asignado=(strtoupper($request->asignado));
        $caso->regional=(strtoupper($request->departamento_id));
        $caso->lugar=(strtoupper($request->municipio_id));
        $caso->ci=$request->ci;
        $caso->detalle=(strtoupper($request->detalle));
        $caso->fechahecho=$request->fechahecho;
        $caso->save();

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
