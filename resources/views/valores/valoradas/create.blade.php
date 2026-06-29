@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Nueva Valorada</h3>

    <form action="{{ route('valoradas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
    <label for="codigo" class="form-label">
        Código de Valorada
    </label>

    <input type="text"
           id="codigo"
           name="codigo"
           class="form-control"
           placeholder="A-21-123"
           style="text-transform: uppercase;"
           oninput="formatValorada(this)"
           required>
</div>
        <div class="mb-3">
            <label>Departamento</label>
            <select name="departamento_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">
                        {{ $departamento->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Municipio</label>
            <select name="municipio_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($municipios as $municipio)
                    <option value="{{ $municipio->id }}">
                        {{ $municipio->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Tipo de Trámite</label>
            <select name="tipo_tramite_id" class="form-control" required>
                <option value="">Seleccione</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->id }}">
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Crear Valorada
        </button>

    </form>

</div>

<script>
function formatValorada(input) {
    let valor = input.value.toUpperCase();

    // limpiar caracteres no válidos
    valor = valor.replace(/[^A-Z0-9]/g, '');

    // aplicar formato: A-12-XXXX...
    if (valor.length > 1) {
        valor = valor.replace(
            /^([A-Z])(\d{0,2})(\d*)/,
            function(_, letra, dosDigitos, resto) {

                let result = letra;

                if (dosDigitos) {
                    result += '-' + dosDigitos;
                }

                if (resto) {
                    result += '-' + resto;
                }

                return result;
            }
        );
    }

    input.value = valor;
}
</script>
@endsection
