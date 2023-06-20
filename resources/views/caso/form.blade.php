<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('caso') }}
            {{ Form::text('caso', $caso->caso, ['class' => 'form-control' . ($errors->has('caso') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'Caso']) }}
            {!! $errors->first('caso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $caso->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $caso->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo vehiculo') }}
            {{ Form::text('vehiculo', $caso->vehiculo, ['class' => 'form-control' . ($errors->has('vehiculo') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'Vehiculo']) }}
            {!! $errors->first('vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $caso->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Modelo') }}
            {{ Form::text('clase', strtoupper($caso->clase), ['class' => 'form-control' . ($errors->has('clase') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'Modelo ejemplo Yaris']) }}
            {!! $errors->first('clase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $caso->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('año') }}
            {{ Form::number('modelo', $caso->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''),  'placeholder' => 'Año de fabricación']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('chasis') }}
            {{ Form::text('chasis', $caso->chasis, ['class' => 'form-control' . ($errors->has('chasis') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'Chasis']) }}
            {!! $errors->first('chasis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hecho') }}
            {{ Form::text('hecho', $caso->hecho, ['class' => 'form-control' . ($errors->has('hecho') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'robo, hurto']) }}
            {!! $errors->first('hecho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $caso->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apaterno') }}
            {{ Form::text('apaterno', $caso->apaterno, ['class' => 'form-control' . ($errors->has('apaterno') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'Apellido paterno']) }}
            {!! $errors->first('apaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amaterno') }}
            {{ Form::text('amaterno', $caso->amaterno, ['class' => 'form-control' . ($errors->has('amaterno') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'Apellido materno']) }}
            {!! $errors->first('amaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $caso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'INVESTIGACION, RESUELTO']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupo_designado') }}
            {{ Form::text('grupo_designado', $caso->grupo_designado, ['class' => 'form-control' . ($errors->has('grupo_designado') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase','placeholder' => 'Grupo Designado']) }}
            {!! $errors->first('grupo_designado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('designado') }}
            {{ Form::text('designado', $caso->designado, ['class' => 'form-control' . ($errors->has('designado') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'oficial Designado']) }}
            {!! $errors->first('designado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regional') }}
            {{ Form::text('regional', $caso->regional, ['class' => 'form-control' . ($errors->has('regional') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'Regional']) }}
            {!! $errors->first('regional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lugar') }}
            {{ Form::text('lugar', $caso->lugar, ['class' => 'form-control' . ($errors->has('lugar') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' =>'Lugar']) }}
            {!! $errors->first('lugar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mes') }}
            {{ Form::text('mes', $caso->mes, ['class' => 'form-control' . ($errors->has('mes') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'Mes']) }}
            {!! $errors->first('mes', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ano') }}
            {{ Form::number('ano', $caso->ano, ['class' => 'form-control' . ($errors->has('ano') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'Año']) }}
            {!! $errors->first('ano', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ci') }}
            {{ Form::number('ci', $caso->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' =>'Ci']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('archivo') }}
            {{ Form::file('archivo', $caso->archivo, ['class' => 'form-control' . ($errors->has('archivo') ? ' is-invalid' : ''), 'placeholder' => 'Archivo']) }}
            {!! $errors->first('archivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Usuario') }} <br>
            {{ Form::label('id_user', Auth::user()->name,['class' => 'form-control']) }}
          
        </div>
        <div class="form-group">
           
            {{ Form::hidden('id_user', Auth::user()->id,$caso->id_user,['class' => 'form-control' . ($errors->has('id_user') ? ' is-invalid' : ''),'disabled' => 'disabled']) }}
            {!! $errors->first('id_user', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>