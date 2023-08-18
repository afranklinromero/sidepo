


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Seguimiento</span>
                        </div>
                        @if(auth()->user()->hasRole(['admin', 'seguimiento']))
                        <div class="float-right">
                        <a class="btn btn-sm btn-success" href="{{ route('seguimientos.edit',$seguimiento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                        </div>
                        @endrole
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $seguimiento->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario:</strong>
                            {{ $seguimiento->usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $seguimiento->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $seguimiento->observacion }}
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>

