<div class="box box-info padding-1">
    <div class="box-body">
        
      
   
        <div class="form-group">
            {{ Form::label('archivo') }}
            {{ Form::file('archivo', $caso->archivo, ['class' => 'form-control' . ($errors->has('archivo') ? ' is-invalid' : ''), 'placeholder' => 'Archivo']) }}
            {!! $errors->first('archivo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('Usuario') }} <br>
            {{ Form::text('id_user', Auth::user()->name,['class' => 'form-control','disabled' => 'disabled']) }}
        </div>
        
        <div class="form-group">
           {{ Form::label('id Usuario') }}
           {{ Form::number('id_user', Auth::user()->id,['class' => 'form-control' ,'disabled' => 'disabled']) }}
           
        </div>
        
        
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>