@extends('layouts.app')

@section('template_title')
    {{ $archivodenuncia->name ?? "{{ __('Show') Archivodenuncia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Archivodenuncia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('archivodenuncias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $archivodenuncia->tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Pdf:</strong>
                            {{ $archivodenuncia->pdf }}
                        </div>
                        <div class="form-group">
                            <strong>Id Caso:</strong>
                            {{ $archivodenuncia->id_caso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
