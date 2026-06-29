@extends('layouts.app')

@section('content')

<div class="container mt-5">

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

                    <form method="POST" action="{{ route('tramite.cita.store') }}">
                        @csrf

                        {{-- FECHA --}}
                        <div class="mb-3">
                            <label class="form-label">Fecha de atención</label>

                            <input
                                type="date"
                                id="fecha"
                                name="fecha"
                                class="form-control"
                                min="{{ now()->addDay()->format('Y-m-d') }}"
                                required>
                        </div>

                        {{-- TURNOS --}}
                        <div class="mb-3">
                            <label class="form-label">Turno disponible</label>

                            <div id="turnos" class="mt-2 text-muted">
                                Seleccione una fecha para ver disponibilidad
                            </div>
                        </div>

                        <button class="btn btn-success w-100">
                            Confirmar Cita
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

{{-- SCRIPT SIMPLE --}}
<script>
document.getElementById('fecha').addEventListener('change', function () {

    let fecha = this.value;

    if (!fecha) return;

    fetch(`/tramite/cita/disponibilidad?fecha=${fecha}`)
        .then(res => res.json())
        .then(data => {

            let html = '';

            if (data.manana_disponible) {
                html += `
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="turno" value="manana" required>
                    <label class="form-check-label">Mañana (${data.manana_cupos} cupos)</label>
                </div>`;
            }

            if (data.tarde_disponible) {
                html += `
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="turno" value="tarde" required>
                    <label class="form-check-label">Tarde (${data.tarde_cupos} cupos)</label>
                </div>`;
            }

            if (!html) {
                html = `<div class="alert alert-warning">No hay cupos disponibles para esta fecha</div>`;
            }

            document.getElementById('turnos').innerHTML = html;
        });

});
</script>

@endsection