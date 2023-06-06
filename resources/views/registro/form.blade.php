<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Usuario') }} <br>
            {{ Form::label('id_user', Auth::user()->name,['class' => 'form-control']) }}
          
        </div>
        <div class="form-group">
           
            {{ Form::hidden('id_user', Auth::user()->id,$registro->id_user,['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''),'disabled' => 'disabled']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::select('tipo',['Denuncia','2'=>'Arrestos','3'=>'Certificaciones'], $registro->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $registro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apaterno') }}
            {{ Form::text('apaterno', $registro->apaterno, ['class' => 'form-control' . ($errors->has('apaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apaterno']) }}
            {!! $errors->first('apaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amaterno') }}
            {{ Form::text('amaterno', $registro->amaterno, ['class' => 'form-control' . ($errors->has('amaterno') ? ' is-invalid' : ''), 'placeholder' => 'Amaterno']) }}
            {!! $errors->first('amaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ci') }}
            {{ Form::text('ci', $registro->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' => 'Ci']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $registro->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('chasis') }}
            {{ Form::text('chasis', $registro->chasis, ['class' => 'form-control' . ($errors->has('chasis') ? ' is-invalid' : ''), 'placeholder' => 'Chasis']) }}
            {!! $errors->first('chasis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('archivo') }}
            {{ Form::file('archivo', $registro->archivo, ['class' => 'form-control' . ($errors->has('archivo') ? ' is-invalid' : ''), 'placeholder' => 'Archivo']) }}
            {!! $errors->first('archivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alias') }}
            {{ Form::text('alias', $registro->alias, ['class' => 'form-control' . ($errors->has('alias') ? ' is-invalid' : ''), 'placeholder' => 'Alias']) }}
            {!! $errors->first('alias', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>