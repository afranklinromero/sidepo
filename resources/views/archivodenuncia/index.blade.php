@extends('layouts.app')

@section('template_title')
    Archivodenuncia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Archivodenuncia') }}
                            </span>

                             <div class="float-right">
                                <a href="#" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
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
                                        
										<th>Tipo</th>
										<th>Pdf</th>
										<th>Id Caso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($archivodenuncias as $archivodenuncia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $archivodenuncia->tipo }}</td>
											<td>{{ $archivodenuncia->pdf }}</td>
											<td>{{ $archivodenuncia->id_caso }}</td>

                                            <td>
                                                <form action="{{ route('archivodenuncias.destroy',$archivodenuncia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('archivodenuncias.show',$archivodenuncia->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('archivodenuncias.edit',$archivodenuncia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $archivodenuncias->links() !!}
            </div>
        </div>
    </div>
@endsection
