@extends('layouts.app')

@section('template_title')
Verificación OTP
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card">
                <div class="card-header bg-warning">
                    Código de Verificación
                </div>

                <div class="card-body">

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('tramite.otp.verify') }}">
                        @csrf

                        <div class="mb-3">
                            <label>OTP</label>
                            <input type="text" name="otp" class="form-control" required>
                        </div>

                        <button class="btn btn-dark w-100">
                            Verificar
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection