@extends('layouts.app')

@section('template_title')
    Caso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Caso') }}
                            </span>

                             <div class="float-right">
                             <form action="{{ route('casos.index') }}" method="GET">
                             @csrf
                                <label for="anio">Ingrese el año:</label>
                                <input style="margin-right: 5px;"type="number" name="anio" id="anio" required>
                                <button style="margin-right: 5px;"type="submit" class="btn btn-primary btn-sm float-right"  data-placement="left">Buscar</button>
                                
                                @role('ventanilla')
                                <a href="{{ route('casos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                @endrole
                            </form> 
                             </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                   @role('denuncia')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        
										<th>Caso</th>
									
										<th>Placa</th>
										
										<th>Denuncia</th>
									
										<th>Estado</th>
										
										<th>Asignado</th>
										<th>Regional</th>
										
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($casos as $caso)
                                        <tr>
                                            
                                            
											<td>{{ $caso->caso }}</td>
											
											<td>{{ $caso->placa }}</td>
											
											
											
											
											
											
											
											
											<td>{{ $caso->fecha_denuncia }}</td>
											
											<td>{{ $caso->estado }}</td>
											
											<td>{{ $caso->asignado }}</td>
											<td>  
                                                 @if (is_numeric($caso->lugar))
                                                    {{ $municipios[$caso->lugar] }}
                                                @else
                                                    {{ $caso->lugar }}
                                                @endif
                                                </td>
											
											
											
										
											

                                            <td>
                                                <form action="{{ route('casos.destroy',$caso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('casos.show',$caso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('casos.edit',$caso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                   @endrole
                </div>
         
                {!! $casos->links() !!}
            </div>
        </div>
    </div>
@endsection
