@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card">
        <div class="card-header">Datos del Ciudadano</div>

        <div class="card-body">

            <form method="POST" action="{{ route('tramite.solicitud.store') }}">
                @csrf

                <div class="row">

                    <div class="col-md-4">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label>Apellido Paterno</label>
                        <input type="text" name="apellido_paterno" class="form-control" required>
                    </div>

                    <div class="col-md-4">
                        <label>Apellido Materno</label>
                        <input type="text" name="apellido_materno" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>CI</label>
                        <input type="text" name="ci" class="form-control" required>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" class="form-control" required>
                    </div>

                </div>

                <button class="btn btn-success mt-3 w-100">
                    Continuar
                </button>

            </form>

        </div>
    </div>

</div>
@endsection