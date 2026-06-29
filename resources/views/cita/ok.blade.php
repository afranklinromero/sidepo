@extends('layouts.app')

@section('template_title')
Cita Confirmada
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header bg-success text-white">
                    Cita Confirmada
                </div>

                <div class="card-body">

                    <h5>Su ficha es:</h5>

                    <h1 class="text-center text-primary">
                        {{ $cita->numero_ficha }}
                    </h1>

                    <p><strong>Fecha:</strong> {{ $cita->fecha }}</p>
                    <p><strong>Turno:</strong> {{ $cita->turno }}</p>

                    <a href="/" class="btn btn-dark w-100">
                        Finalizar
                    </a>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection