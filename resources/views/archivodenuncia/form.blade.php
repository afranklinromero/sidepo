<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
    {{ Form::label('Etapa') }}
    {{ Form::select('tipo', [
        '1' => 'Etapa preliminar',
        '2' => 'Etapa Preparatoria',
        '3' => 'Recuperado',
        '4' => 'Entregado',
        '5' => 'Marcado',
        '7' => 'Baja Tributaria',
        ] + (auth()->user()->hasRole(['admin', 'desmarque'])? ['6' => 'Desmarcado'] : []), $archivodenuncia->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione.....']) }}
        {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
</div>
        
        <div class="form-group">
            <label for="pdf">Archivo PDF</label>
            <input type="file" name="pdf" id="pdf" class="form-control">
 
        </div>
        <div class="form-group">
            
            {{ Form::text('id_caso', $caso->id, ['class' => 'form-control' . ($errors->has('id_caso') ? ' is-invalid' : ''),'hidden' => true]) }}
            {!! $errors->first('id_caso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <input type="hidden" name="pdf_data" id="pdf_data" value="1" readonly>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>