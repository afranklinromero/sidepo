@extends('layouts.app')

@section('template_title')
    Caso
@endsection

@section('content')
    <div class="container-fluid">
        <b>BUSCAR POR</b>
     {{ Form::open(['route'=>'casos.ver', 'method'=> 'GET', 'class'=>'form-inline pull-rigth'])}}

           
            <div class="form-group">
                {{ Form::select('busqueda_por', [
                    'caso' => 'Caso',
                    'nombre' => 'Nombre',
                    'apaterno' => 'Apellido Paterno',
                    'grupo_designado' => 'Grupo designado',
                    'lugar' => 'Lugar',

                    'ci' => 'Ci',
                    'marca' => 'Marca',
                    'fecha_denuncia' => 'Fecha denuncia',
                    'placa' => 'Placa',
                    'vehiculo' => 'Vehiculo',
                    'tipo' => 'Tipo',
                    'color' => 'Color',
                    'modelo' => 'Modelo',
                    'chasis' => 'Chasis',
                    'hecho' => 'Hecho',
                    'estado' =>'Estado',
                    'amaterno' => 'Apellido Materno',
                    'asignado' => 'Asignado',
                    'regional' => 'Regional',
                    'fechahecho' => 'Fecha hecho'
                    
                    ], null, ['class' => 'form-control']) }}
             </div>
            <div class="form-group">
                {{ Form::text('termino_busqueda', null, ['class'=>'form-control', 'placeholder'=> 'Ingrese el término de búsqueda'] )}}
            </div>
            <div class="form-group">
                <button type = "submit" class = "btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
                </button>
            </div>
     {{ Form::close() }}


        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Caso') }} asignados encontrados {!! $casos->total() !!} 
                            </span>

                             <div class="float-right">
                                <form action="{{ route('casos.index') }}" method="GET">
                                    @csrf
                                   
                                    
                                   
                                    <a href="{{ route('casos.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('volver') }}
                                    </a>
                                   
                                </form> 
                             </div>
                        </div>
                    </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        
                        @if(auth()->user()->hasRole(['admin', 'denuncia', 'seguimiento', 'visor','ventanilla','desmarque']))
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                        
                                                
                                            <tr>
                                                <th class="col">Id</th>
                                                <th class="col">Caso</th>
                                                <th class="col">Placa</th>
                                                <th class="col">Denuncia</th>
                                                <th class="col-2">Estado</th>
                                                <th class="col-2">Asignado</th>
                                                <th class="col">Grupo</th>
                                                <th class="col">Lugar</th>
                                                <th class="col">Accion</th>
                                                
                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($casos as $caso)
                                                <tr>
                                                    
                                                    <td>{{ $caso->id}}</td>
                                                    <td>{{ $caso->caso }}</td>
                                                    <td>{{ $caso->placa }}</td>
                                                    
                                                    <td>{{ $caso->fecha_denuncia }}</td>
                                                    
                                                    <td>{{ $caso->estado }}</td>
                                                    
                                                    <td>{{ $caso->asignado }}</td>
                                                    <td>{{ $caso->grupo_designado }}</td>

                                                    <td>  
                                                        @if (is_numeric($caso->lugar))
                                                            {{ $municipios[$caso->lugar] }}
                                                        @else
                                                            {{ $caso->lugar }}
                                                        @endif
                                                    </td>

                                                    <td>
                                                       
                                                            <a class="btn btn-sm btn-primary " href="{{ route('casos.show',$caso->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                                            @if(auth()->user()->hasRole(['desmarque']))
                                                            <a class="btn btn-sm btn-success" href="{{ route('casos.edit',$caso->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                            @endrole
                                                            @if(auth()->user()->hasRole(['ventanilla']))
                                                         <a href="{{ route('archivodenuncias.create', $caso->id) }}" class="btn btn-sm btn-primary float-right"  data-placement="left">
                                                         {{ __('Crear PDF') }}
                                                         </a>
                                                         @endrole
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {!! $casos->links() !!}
                                </div>
                            
                            </div>
                        @endif
                   
                </div>
                
              
               
            </div>
           
        </div>
    </div>
@endsection
