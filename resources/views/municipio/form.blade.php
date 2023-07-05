<div class="box box-info padding-1">
    <div class="box-body">
        

        <div class="form-group">
            <labe from="">Departamento</label>
            <select name="departamento_id" id="departamento:id" class="from-control">
                @foreach ($departamentos as $departamento)
                    <option value="{{ $departamento['id'] }} ">{{$departamento['nombre']}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $municipio->nombre, ['class' => 'form-control', 'style'=>'text-transform:uppercase','placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>

