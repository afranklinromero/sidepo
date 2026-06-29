@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Tipo Tramite
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Tipo Tramite</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('tipos-tramites.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipo-tramite.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
