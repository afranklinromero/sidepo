@extends('layouts.app')

@section('template_title')
Datos del Ciudadano
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header bg-info text-white">
                    Registro de Datos
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('solicitud.store') }}">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Apellido Paterno</label>
                                <input type="text" name="apellido_paterno" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Apellido Materno</label>
                                <input type="text" name="apellido_materno" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>CI</label>
                                <input type="text" name="ci" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>Teléfono</label>
                                <input type="text" name="telefono" class="form-control" required>
                            </div>

                        </div>

                        <button class="btn btn-success w-100">
                            Continuar
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection