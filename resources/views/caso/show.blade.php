@extends('layouts.app')

@section('template_title')
    {{ $caso->name ?? "{{ __('Show') Casossssss" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"> Registro del Caso</span>
                        
                            <a class="btn btn-primary" href="{{ route('casos.index') }}"> {{ __('Volver') }}</a>
                        </div>
                        
                        </div>
                            <button class="btn btn-primary container-fluid" style="margin-top:-5px" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3">Datos de Registro</button>
                            <div class="card-body ">


                                <div class="row">
                                    <div class="col-md-6" >
                                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                                            <div class="form-group">
                                                <strong>Caso:</strong>
                                                {{ $caso->caso }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <strong>Fecha del Hecho:</strong>
                                                {{ $caso->fechahecho }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Placa:</strong>
                                                {{ $caso->placa }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Vehiculo:</strong>
                                                {{ $caso->vehiculo }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Marca:</strong>
                                                {{ $caso->marca }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Clase:</strong>
                                                {{ $caso->tipo }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Color:</strong>
                                                {{ $caso->color }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Modelo:</strong>
                                                {{ $caso->modelo }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Chasis:</strong>
                                                {{ $caso->chasis }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Hecho:</strong>
                                                {{ $caso->hecho }}
                                        
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="col-md-6">
                                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                                            <div class="form-group">
                                                <strong>Nombre:</strong>
                                                {{ $caso->nombre }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Apaterno:</strong>
                                                {{ $caso->apaterno }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Amaterno:</strong>
                                                {{ $caso->amaterno }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Ci:</strong>
                                                {{ $caso->ci }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Estado:</strong>
                                                {{ $caso->estado }}
                                            </div>
                                            
                                            <div class="form-group">
                                                <strong>Regional:</strong>
                                                @if (is_numeric($caso->regional))               
                                                @foreach ($departamentos as $departamento)
                                                {{ $departamento->nombre }}
                                                @endforeach
                                                @else
                                                {{ $caso->regional }}
                                                @endif
                                            </div>
                                                <div class="form-group">
                                                <strong>Lugar:</strong>
                                                @if (is_numeric($caso->lugar))           
                                                @foreach ($municipios as $municipio)
                                                {{ $municipio->nombre }}
                                                @endforeach
                                                @else
                                                {{ $caso->lugar }}
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <strong>Grupo Designado:</strong>
                                                {{ $caso->grupo_designado }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Asignado:</strong>
                                                {{ $caso->asignado }}
                                            </div>
                                            <div class="form-group">
                                                <strong>Fecha del registro:</strong>
                                                {{ $caso->fecha_denuncia }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <style>
                                        .truncate-text {
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            cursor: pointer;

                                        }
                                    </style>

                                    <div class="col-md-12">
                                        <div class="collapse multi-collapse" id="multiCollapseExample3">
                                            <div class="form-group">
                                            <strong>Breve Detalle:</strong>
                                                <p class="truncate-text" onclick="toggleText(this)">{{ $caso->detalle }}</p>
                                            </div>
                                        </div>
                                    </div> 
                                    
                                    <script>
                                    function toggleText(element) {
                                        element.classList.toggle('truncate-text');
                                    }
                                    </script>
                            
                            
                            </div>
                        
                            <button class="btn btn-primary container-fluid" style="margin-top:-25px" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapses" aria-expanded="false" aria-controls="multiCollapseExample4">Pdf</button>
                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="collapse multi-collapses" id="multiCollapseExample4">
                            
                                            @php
                                            $etapaPreliminarMostrada = false;
                                            $etapaPreparatoriaMostrada = false;
                                            $juicioOralMostrado = false;
                                           
                                            @endphp

                                            
                                            @foreach ($archivodenuncias as $archivodenuncia)
                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 1 && !$etapaPreliminarMostrada)
                                                    @php $etapaPreliminarMostrada = true; @endphp
                                                    
                                                    <label>Documentación Etapa Preliminar:</label><br>
                                                @endif

                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 2 && !$etapaPreparatoriaMostrada)
                                                    @php $etapaPreparatoriaMostrada = true; @endphp
                                                    <label>Documentación Etapa Preparatoria:</label><br>
                                                @endif

                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 3 && !$juicioOralMostrado)
                                                    @php $juicioOralMostrado = true; @endphp
                                                    <label>Documentación Juicio Oral:</label><br>
                                                @endif
                                                <a class ="btn   " href="{{ asset('storage/pdf/' . $archivodenuncia->pdf) }}" target="_blank">Abrir PDF</a>
                                                @role('admin')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Borrar') }}</button>
                                                @endrole
                                                <div class="d-flex justify-content-center">
                                                
                                                
                                            
                                                    <object data="{{asset('storage/pdf/' . $archivodenuncia->pdf)}}" type="application/pdf" frameborder="0" width="100%" height="400px">
                                                        <iframe src="https://docs.google.com/viewer?url={{asset('storage/pdf/' . $archivodenuncia->pdf)}}&embedded=true" style="width:100%; height:400px;" frameborder="0"></iframe>
                                                    </object>

                                            
                                            

                                            

                                            
                                            
                                                
                                                </div>
                        
                                                

                                                <form action="{{ route('archivodenuncias.destroy',$archivodenuncia->id) }}" method="POST">
                                                    @csrf 
                                                    @method('DELETE')
                                                
                                                </form>
                                            
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="mt-2">
                                <button class="btn btn-primary container-fluid"  type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapses5" aria-expanded="false" aria-controls="Seguimiento">Seguimiento</button>
                                            <div class="row">
                                                <div class="col-md-12" >
                                                    <div class="collapse multi-collapses5" id="Seguimiento">
                                                        @if(auth()->user()->hasRole(['admin', 'seguimiento','denuncia'])) 
                                                        @if($caso->seguimientos->isEmpty())
                                                            <!-- El caso no tiene seguimientos, muestra el formulario de creación -->
                                                            <form method="POST" action="{{ route('seguimientos.store') }}"  role="form" enctype="multipart/form-data">
                                                                @csrf
                                                                @include('seguimiento.form')
                                                            </form>
                                                        @else
                                                            <!-- El caso tiene seguimientos, muestra los detalles del seguimiento más reciente -->
                                                            @include('seguimiento.show', ['seguimiento' => $caso->seguimientos->last()])
                                                        @endif
                                                        @endrole
                                                    </div>  
                                                </div>  
                                            </div>       
                        
                                </div>
                        </div>
                        
                    </div> 
                    
                </div>
          
            </div>
        </div>
    </section>
@endsection
