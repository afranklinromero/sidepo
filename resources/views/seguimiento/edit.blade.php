@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Seguimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                    <a class="btn btn-primary" href="{{ url()->previous() }}"> {{ __('Volver') }}</a>
                        <span class="card-title">Modificar Seguimiento</span>
                        
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('seguimientos.update', $seguimiento->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('seguimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
