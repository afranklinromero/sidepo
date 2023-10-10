@extends('layouts.app')

@section('template_title')
    User
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('User') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('register') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                    <b>BUSCAR POR</b>
                    {{ Form::open(['route'=>'users.index', 'method'=> 'GET', 'class'=>'form-inline pull-rigth'])}}

                        
                <div class="form-group">
                    {{ Form::select('busqueda_por', [
                    
                        'name' => 'Nombre',
                        'apellido' => 'Apellido',
                    
                        
                        ], null, ['class' => 'form-control']) }}
                </div>
                <div class="form-group">
                    {{ Form::text('termino_busqueda', null, ['class'=>'form-control', 'placeholder'=> 'Ingrese el término de búsqueda'] )}}
                </div>
                <div class="form-group">
                                <button type = "submit" class = "btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </div>
        {{ Form::close() }}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Apellido</th>
										<th>Grado</th>
										<th>Grupo</th>
										<th>Email</th>
										<th>Role</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ 1 }}</td>
                                            
											<td>{{ $user->name }}</td>
											<td>{{ $user->apellido }}</td>
											<td>{{ $user->grado }}</td>
											<td>{{ $user->grupo }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->role }}</td>

                                            <td>
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $users->links() !!}
            </div>
        </div>
    </div>
@endsection
