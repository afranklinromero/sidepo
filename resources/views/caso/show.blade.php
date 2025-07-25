
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
                        
                            <a class="btn btn-primary" href="{{ url()->previous() }}"> {{ __('Volver') }}</a>
                        </div>
                        <br>
                      
                            <button class="btn btn-primary container-fluid"  type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3">Datos de Registro</button>
                            <div>


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
                            <br>
                            <button class="btn btn-primary container-fluid"  type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">Pdf Privado</button>
                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="collapse multi-collapses" id="multiCollapseExample4">
                            
                                            @php
                                            $etapaPreliminarMostrada = false;
                                            $etapaPreparatoriaMostrada = false;
                                            $juicioOralMostrado = false;

                                            $recuperado = false;
                                            $entregado = false;
                                            $marcado = false;
                                            
                                            $bajaTributaria = false;
                                            $desmarcado = false;
                                           
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

                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 3 && !$recuperado)
                                                    @php $recuperado = true; @endphp
                                                    <label>Documentación Recuperado:</label><br>
                                                @endif

                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 4 && !$entregado)
                                                    @php $entregado = true; @endphp
                                                    <label>Documentación Entregado:</label><br>
                                                @endif
                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 5 && !$marcado)
                                                    @php $marcado = true; @endphp
                                                    <label>Documentación Marcado:</label><br>
                                                @endif
                                             
                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 7 && !$bajaTributaria)
                                                    @php $bajaTributaria = true; @endphp
                                                    <label>Documentación Baja Tributaria:</label><br>
                                                @endif
                                                
                                                    @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 6 && !$desmarcado)
                                                        @php $desmarcado = true; @endphp
                                                        <label>Documentación Desmarcado:</label><br>
                                                    @endif
                                                
                                                <div class="float-right" style="display: flex; gap: 10px; align-items: center;">
                                                <form action="{{ route('archivodenuncias.destroy',$archivodenuncia->id) }}" method="POST">
                                                        <a class ="btn btn-success btn-sm  " href="{{ asset('storage/pdf/' . $archivodenuncia->pdf) }}" target="_blank">Abrir PDF</a>
                                                        @role('admin')
                                                      
                                                        <button type="submit" class="btn btn-danger btn-sm">Borrar PDF</button>
                                                        @csrf
                                                            @method('DELETE')
                                                            
                                                        </form>
                                                        @endrole
                                                        
                                                       
                                                </div>  
                                                @role('admin')
                                                <button class="float-right btn-generate-qr btn btn-sm btn-info" style="color: white; display: flex; gap: 10px; align-items: center;" data-public-link="{{ asset('storage/pdf/' . $archivodenuncia->pdf) }}">Generar QR</button>
                                                @endrole
                                                <div class="qr-container "></div>
                                               
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
                            <br>
                            <button class="btn btn-primary container-fluid"  type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#multiCollapse6" 
                            aria-expanded="false" 
                            aria-controls="multiCollapse6">Pdf Publico</button>
                                <div class="row">
                                    <div class="col-md-12" >
                                        <div class="collapse multi-collapses" id="multiCollapse6">
                            
                                            @php
                                            $etapaPreliminarMostrada = false;
                                            $etapaPreparatoriaMostrada = false;
                                            $juicioOralMostrado = false;

                                            $recuperado = false;
                                            $entregado = false;
                                            $marcado = false;
                                            
                                            $bajaTributaria = false;
                                            $desmarcado = false;
                                           
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

                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 3 && !$recuperado)
                                                    @php $recuperado = true; @endphp
                                                    <label>Documentación Recuperado:</label><br>
                                                @endif

                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 4 && !$entregado)
                                                    @php $entregado = true; @endphp
                                                    <label>Documentación Entregado:</label><br>
                                                @endif
                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 5 && !$marcado)
                                                    @php $marcado = true; @endphp
                                                    <label>Documentación Marcado:</label><br>
                                                @endif
                                             
                                                @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 7 && !$bajaTributaria)
                                                    @php $bajaTributaria = true; @endphp
                                                    <label>Documentación Baja Tributaria:</label><br>
                                                @endif
                                                
                                                    @if ($archivodenuncia->pdf && $archivodenuncia->tipo == 6 && !$desmarcado)
                                                        @php $desmarcado = true; @endphp
                                                        <label>Documentación Desmarcado:</label><br>
                                                    @endif
                                                
                                                <div class="float-right" style="display: flex; gap: 10px; align-items: center;">
                                                <form action="{{ route('archivodenuncias.destroy',$archivodenuncia->id) }}" method="POST">
                                                        <a class ="btn btn-success btn-sm  " href="{{ asset('storage/pdf/' . $archivodenuncia->pdf) }}" target="_blank">Abrir PDF</a>
                                                        @role('admin')
                                                      
                                                        <button type="submit" class="btn btn-danger btn-sm">Borrar PDF</button>
                                                        @csrf
                                                            @method('DELETE')
                                                            
                                                        </form>
                                                        @endrole
                                                        
                                                       
                                                </div>  
                                                @role('admin')
                                                <button class="float-right btn-generate-qr btn btn-sm btn-info" style="color: white; display: flex; gap: 10px; align-items: center;" data-public-link="{{ asset('storage/pdf/' . $archivodenuncia->pdf) }}">Generar QR</button>
                                                @endrole
                                                <div class="qr-container "></div>
                                               
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
                            <br>
                             <button class="btn btn-primary container-fluid"  type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapses5" aria-expanded="false" aria-controls="Seguimiento">Seguimiento</button>
                            <div class="row">
                                                <div class="col-md-12" >
                                                    <div class="collapse multi-collapses5" id="Seguimiento">
                                                    @if(auth()->user()->hasRole(['admin', 'seguimiento','visor']) || !$caso->seguimientos->isEmpty()) 
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
                            <br>
                       
                        
                    </div> 
                    
                </div>
          
            </div>
        </div>
    </section>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const qrButtons = document.querySelectorAll(".btn-generate-qr");
        
        qrButtons.forEach((button) => {
            button.addEventListener("click", function () {
                const link = this.getAttribute("data-public-link");
                const qrContainer = this.nextElementSibling; // Selecciona el div para el QR

                // Verifica si ya hay un QR en el contenedor
                if (qrContainer.querySelector("canvas")) {
                    // Si hay un QR, elimínalo y restablece la altura
                    qrContainer.innerHTML = '';
                    qrContainer.style.height = 'auto';
                } else {
                    // Si no hay un QR, genera el QR usando qrcode-generator
                    const qrcode = new QRCode(qrContainer, {
                        text: link
                    });

                    // Ajusta la altura del contenedor al tamaño del QR generado
                    qrContainer.style.height = qrContainer.offsetHeight + 'px';
                }
            });
        });
    });
</script>

