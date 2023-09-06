<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('role_id') }}
            {{ Form::select('role_id', ['1' => 'administrador', '2' => 'ventanilla', '3' => 'denuncia', '4' => 'seguimiento'], $modelHasRole->role_id, ['class' => 'form-control' . ($errors->has('role_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una opción']) }}
           
            {!! $errors->first('role_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group"  style="display: none;">
            {{ Form::label('model_type') }}
            {{ Form::text('model_type', 'App\Models\User', ['class' => 'form-control' . ($errors->has('model_type') ? ' is-invalid' : ''), 'placeholder' => 'Model Type', 'readonly' => 'readonly']) }}
            {!! $errors->first('model_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       
        <div class="form-group">
        {{ Form::label('Oficial Asignado') }} <br>
        <select name="model_id" id="model_id" class="from-control seleccion">
        <option value="">Seleccionar usuario </option> 
        @foreach ($users as $user)
        @if(!empty($user['grado']) || !empty($user['apellido']))
        <option value="{{$user['id']}}">
        {{ $user['grado'] }} {{ $user['name'] }} {{ $user['apellido'] ?? '' }}
        </option>
        @endif
        @endforeach
        </select>

        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
<script>
    

    // Agregar un evento al cambiar la selección del usuario
    document.getElementById('model_id').addEventListener('change', function() {
        var selectedUserName = this.options[this.selectedIndex].text;
        document.getElementById('asignado').value = selectedUserName;
    });
</script>
