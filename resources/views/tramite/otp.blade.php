@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card">
        <div class="card-header">Verificación OTP</div>

        <div class="card-body">

            <form method="POST" action="{{ route('tramite.otp.verify') }}">
                @csrf

                <label>Código enviado al celular</label>
                <input type="text" name="otp" class="form-control" required>

                @if(session('error'))
                    <div class="alert alert-danger mt-2">
                        {{ session('error') }}
                    </div>
                @endif

                <button class="btn btn-primary mt-3 w-100">
                    Verificar
                </button>

            </form>

        </div>
    </div>

</div>
@endsection