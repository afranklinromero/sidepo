


@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card">
        <div class="card-header">Datos del Ciudadano</div>

        <div class="card-body">

            <form method="POST" action="{{ route('tramite.valorada.validar') }}">
    @csrf

    <label>Ingrese código de Valorada</label>
    <input type="text" name="codigo" class="form-control" required>

    @if(session('error'))
        <div class="alert alert-danger mt-2">
            {{ session('error') }}
        </div>
    @endif

    <button class="btn btn-primary mt-3">
        Continuar
    </button>
</form>

        </div>
    </div>

</div>
@endsection