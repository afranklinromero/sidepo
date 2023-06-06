@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? "{{ __('Show') Registro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $registro->id_user }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $registro->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $registro->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apaterno:</strong>
                            {{ $registro->apaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Amaterno:</strong>
                            {{ $registro->amaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $registro->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $registro->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Chasis:</strong>
                            {{ $registro->chasis }}
                        </div>
                        <div class="form-group">
                            <strong>Archivo:</strong>
                            {{ $registro->archivo }}
                        </div>
                        <div class="form-group">
                            <strong>Alias:</strong>
                            {{ $registro->alias }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
