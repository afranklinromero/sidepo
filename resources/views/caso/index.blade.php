@extends('layouts.app')

@section('template_title')
    Caso
@endsection

@section('content')
    <div class="container-fluid">
        <b>BUSCAR POR</b>
     {{ Form::open(['route'=>'casos.index', 'method'=> 'GET', 'class'=>'form-inline pull-rigth'])}}

           
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
                                   
                                    
                                    @if(auth()->user()->hasRole(['admin', 'ventanilla'])) 
                                    <a href="{{ route('casos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Crear nuevo') }}
                                    </a>
                                    @endrole
                                    @if(auth()->user()->hasRole(['admin', 'seguimiento'])) 
                                                    <a class="btn btn-sm btn-secondary " href="{{ route('seguimientos.index') }}"><i class="fa-solid fa-magnifying-glass"></i> </a>
                                    @endrole
                                </form> 
                             </div>
                        </div>
                    </div>
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        
                        @if(auth()->user()->hasRole(['admin', 'denuncia', 'seguimiento', 'visor']))
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="thead">
                                            <tr>
                                                
                                                <th>Id</th>
                                                <th>Caso</th>
                                            
                                                <th>Placa</th>
                                                
                                                <th>Denuncia</th>
                                            
                                                <th>Estado</th>
                                                
                                                <th>Asignado</th>
                                                <th>Regional</th>
                                                
                                                

                                                <th></th>
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
                                                    

                                                    <td>  
                                                        @if (is_numeric($caso->lugar))
                                                            {{ $municipios[$caso->lugar] }}
                                                        @else
                                                            {{ $caso->lugar }}
                                                        @endif
                                                        </td>
                                                    <td>
                                                        <form action="{{ route('casos.destroy',$caso->id) }}" method="POST">
                                                        
                                                        
                                                            <a class="btn btn-sm btn-primary " href="{{ route('casos.show',$caso->id) }}"><i class="fa fa-fw fa-eye"></i> </a>
                                                            @if(auth()->user()->hasRole(['admin', 'denuncia'])) 
                                                            <a class="btn btn-sm btn-success" href="{{ route('casos.edit',$caso->id) }}"><i class="fa fa-fw fa-edit"></i> </a>
                                                            @endif
                                                            @if(auth()->user()->hasRole(['admin', 'seguimiento','denuncia'])) 
                                                            <span class="btn btn-sm {{ $caso->seguimientos->isEmpty() ? 'btn-danger' : 'btn-success' }}" >
        
                                                                @if($caso->seguimientos->isEmpty())
                                                                    <i class="fa-solid fa-x"></i>
                                                                @else
                                                                    <i class="fa-solid fa-check"></i>
                                                                @endif
                                                            </span>
                                                            @endif

                                                            @csrf
                                                            @method('DELETE')
                                                            @role('admin') 
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> </button>
                                                            @endrole
                                                        </form>
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
