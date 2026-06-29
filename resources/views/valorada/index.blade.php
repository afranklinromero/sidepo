@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-dark text-white">
                    Ingreso de Trámite
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('tramite.valorada.validar') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Código de Valorada</label>
                            <input type="text" name="codigo" class="form-control"
                                   placeholder="Ingrese su código" required>
                        </div>

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <button class="btn btn-primary w-100">
                            Validar Código
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>

</div>
@endsection