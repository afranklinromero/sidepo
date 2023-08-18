@extends('layouts.app')

@section('template_title')
    Seguimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                            <a class="btn btn-primary" href="{{ route('casos.index') }}"> {{ __('Volver') }}</a>   {{ __('Seguimiento') }}
                            </span>
                            <!-- 
                            <div class="float-right">
                                <a href="{{ route('seguimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>-->

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Estado</th>
										<th>Usuario</th>
										<th>Fecha</th>
										<th>Observacion</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seguimientos as $seguimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $seguimiento->estado }}</td>
											<td>{{ $seguimiento->usuario }}</td>
											<td>{{ $seguimiento->fecha }}</td>
											<td>{{ $seguimiento->observacion }}</td>
											

                                            <td>
                                                <form action="{{ route('seguimientos.destroy',$seguimiento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('seguimientos.show',$seguimiento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('seguimientos.edit',$seguimiento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                </div>
                {!! $seguimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
