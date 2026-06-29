@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    Agendar Cita
                </div>

                <div class="card-body">

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST"
                          action="{{ route('tramite.cita.store') }}">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label">
                                Fecha
                            </label>

                            <select
                                name="fecha"
                                class="form-control"
                                required>

                                <option value="">
                                    Seleccione una fecha
                                </option>

                                @foreach($fechasDisponibles as $fecha)

                                    <option value="{{ $fecha }}">
                                        {{ \Carbon\Carbon::parse($fecha)->format('d/m/Y') }}
                                    </option>

                                @endforeach

                            </select>

                            @error('fecha')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Turno
                            </label>

                            <select
                                name="turno"
                                class="form-control"
                                required>

                                <option value="">
                                    Seleccione turno
                                </option>

                                <option value="manana">
                                    Mañana
                                </option>

                                <option value="tarde">
                                    Tarde
                                </option>

                            </select>

                            @error('turno')
                                <small class="text-danger">
                                    {{ $message }}
                                </small>
                            @enderror

                        </div>

                        <div class="alert alert-info">

                            <strong>Importante:</strong>

                            La cita quedará registrada
                            únicamente si existen cupos
                            disponibles para la fecha
                            y turno seleccionados.

                        </div>

                        <button
                            type="submit"
                            class="btn btn-success w-100">

                            Confirmar Cita

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection