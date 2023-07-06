@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Caso
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Caso</span>
                    </div>
                   
                        <br>
                    <div class="card-body">
                        <form method="POST" action="{{ route('casos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('caso.form')

                        </form>
                       
                    </div>
                   
                </div>
                
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script> 
 $(document).ready(function(){
    $('#departamento_id').on('change', function(){
        var municipioDropdown = $('#municipio_id');
        var departamentoId = $(this).val();

        if ($.trim(departamentoId) != '') {
            $.ajax({
                url: "{{ route('casos.create') }}",
                data: {
                    departamento_id: departamentoId
                },
                success: function(data){
                    municipioDropdown.empty();
                    municipioDropdown.append('<option value="" selected>Seleccione</option>');
                    
                    $.each(data, function(id, value){
                        municipioDropdown.append('<option value="' + id + '">' + value + '</option>');
                    });
                }
            });
        }
    });
});
    </script>
@endsection