@extends('layouts.app')

@section('template_title')
    {{ $caso->name ?? "{{ __('Show') Caso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Caso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('casos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Caso:</strong>
                            {{ $caso->caso }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $caso->fecha }}
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
                            {{ $caso->clase }}
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
                            <strong>Estado:</strong>
                            {{ $caso->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo Designado:</strong>
                            {{ $caso->grupo_designado }}
                        </div>
                        <div class="form-group">
                            <strong>Designado:</strong>
                            {{ $caso->designado }}
                        </div>
                        <div class="form-group">
                            <strong>Regional:</strong>
                            {{ $caso->regional }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $caso->lugar }}
                        </div>
                        <div class="form-group">
                            <strong>Mes:</strong>
                            {{ $caso->mes }}
                        </div>
                        <div class="form-group">
                            <strong>Ano:</strong>
                            {{ $caso->ano }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $caso->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $caso->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            <a target="_blank" href= 
                            {{ $url= Storage::url ($caso->archivo) }}
                            >pdf
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
