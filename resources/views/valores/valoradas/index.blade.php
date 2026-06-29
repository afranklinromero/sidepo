@extends('layouts.app')

@section('content')
<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Listado de Valoradas</h3>

        <a href="{{ route('valoradas.create') }}" class="btn btn-primary">
            Nueva Valorada
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body table-responsive">

            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Tipo Trámite</th>
                    <th>Estado</th>
                    <th>Usuario</th>
                    <th>Fecha</th>
                    @role('admin')
                    <th>Acciones</th>
                    @endrole
                </tr>
                </thead>

                <tbody>
                    @forelse($valoradas as $valorada)
                        <tr>
                            <td>{{ $valorada->id }}</td>
                            <td><strong>{{ $valorada->codigo }}</strong></td>
                            <td>{{ $valorada->departamento->nombre ?? '-' }}</td>
                            <td>{{ $valorada->municipio->nombre ?? '-' }}</td>
                            <td>{{ $valorada->tipoTramite->nombre ?? '-' }}</td>

                            <td>
                                @if($valorada->estado == 'disponible')
                                    <span class="badge bg-success">Disponible</span>
                                @elseif($valorada->estado == 'reservada')
                                    <span class="badge bg-warning text-dark">Reservada</span>
                                @elseif($valorada->estado == 'procesando')
                                    <span class="badge bg-primary">Procesando</span>
                                @elseif($valorada->estado == 'finalizada')
                                    <span class="badge bg-secondary">Finalizada</span>
                                @else
                                    <span class="badge bg-danger">Anulada</span>
                                @endif
                            </td>

                            <td>{{ $valorada->usuario->name ?? '-' }}</td>

                            <td>{{ $valorada->created_at->format('d/m/Y H:i') }}</td>
                            @role('admin')
                            <td>
                                
                                    <form action="{{ route('valoradas.destroy', $valorada) }}" method="POST"
                                        onsubmit="return confirm('¿Seguro de eliminar esta valorada?');">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm">
                                            Eliminar
                                        </button>
                                    </form>
                                
                            </td>
                            @endrole
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">
                                No existen valoradas registradas
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="mt-3">
                {{ $valoradas->links() }}
            </div>

        </div>
    </div>

</div>
@endsection