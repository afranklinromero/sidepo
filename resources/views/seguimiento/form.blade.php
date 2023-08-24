<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estado', $seguimiento->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        


        <div class="form-group">
    {{ Form::label('Oficial Asignado') }} <br>
    <select name="id_user" id="id_user" class="form-control seleccion">
        <option value="">Seleccionar usuario</option> 
        @foreach ($users as $id => $apellido)
            <option value="{{ $id }}" {{ $id == $seguimiento->id_user ? 'selected' : '' }}>{{ $apellido }}</option>
        @endforeach
    </select>
    {{ Form::text('usuario', $caso->user->name ?? '' ,['class' => 'form-control', 'readonly' => 'readonly', 'id' => 'usuario']) }}
    </div>

        <div class="form-group">


        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $seguimiento->fecha ?? now()->format('Y-m-d'), ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::text('observacion', $seguimiento->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'Observacion']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
           
            {{ Form::text('id_caso', $seguimiento->id_caso ?? $caso->id, ['class' => 'form-control' . ($errors->has('id_caso') ? ' is-invalid' : ''), 'placeholder' => 'Id Caso','hidden' => true]) }}
            {!! $errors->first('id_caso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
           
            {{ Form::text('id_usuario', $seguimiento->id_usuario ?? $caso->id_user, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario' ,'hidden' => true]) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
<script>
     // Inicializar el valor del campo asignado
    

    // Agregar un evento al cambiar la selección del usuario
    document.addEventListener('DOMContentLoaded', function() {
        var selectedUserName = document.querySelector('#id_user option:checked').textContent;
        document.getElementById('usuario').value = selectedUserName;
        document.getElementById('usuario').setAttribute('hidden', 'true');
        document.getElementById('id_user').addEventListener('change', function() {
            var selectedUserName = this.options[this.selectedIndex].text;
            document.getElementById('usuario').value = selectedUserName;
        });
    });
</script>