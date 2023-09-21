<div class="box box-info padding-1">
    
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('caso') }}
            {{ Form::text('caso', $caso->caso, ['class' => 'form-control' . ($errors->has('caso') ? ' is-invalid' : ''), 'style'=>'text-transform:uppercase','placeholder' => 'Caso']) }}
            {!! $errors->first('caso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_denuncia') }}
            {{ Form::date('fecha_denuncia', $caso->fecha_denuncia, ['class' => 'form-control' . ($errors->has('fecha_denuncia') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'fecha denuncia']) }}
            {!! $errors->first('fecha_denuncia', '<div class="invalid-feedback">:message</div>') !!}
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
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $caso->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase','placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $caso->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
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
            {{ Form::label('ci') }}
            {{ Form::number('ci', $caso->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' =>'Ci']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechahecho') }}
            {{ Form::date('fechahecho', $caso->fechahecho, ['class' => 'form-control' . ($errors->has('fechahecho') ? ' is-invalid' : ''),'style'=>'text-transform:uppercase', 'placeholder' => 'fecha del hecho']) }}
            {!! $errors->first('fechahecho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalle') }}
            {{ Form::textarea('detalle', $caso->detalle,null, ['rows' => 4, 'cols' => 50, 'maxlength' => 1200, 'oninput' => 'mostrarContador(this)', 'class' => 'form-control' . ($errors->has('detalle') ? ' is-invalid' : ''), 'placeholder' =>'Breve detalle']) }}
            {!! $errors->first('detalle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <span id="contador"></span>
        <script>
        function mostrarContador(elemento) {
        var contador = document.getElementById("contador");
        var caracteresRestantes = elemento.getAttribute('maxlength') - elemento.value.length;
        contador.textContent = "Caracteres restantes: " + caracteresRestantes;
         }
        </script>
        

            <div class="form-group">
            <label  id="label_departamento"> Regional 
            <select name="departamento_id" id="departamento_id" class="from-control seleccion">
            <option value="">Selecciona Regional </option> 
            @foreach ($departamentos as $departamento)
                    <option value="{{$departamento['id']}}"
                     @if ($departamento['id'] == $caso->regional) selected @endif>
                      {{$departamento['nombre']}}
                    </option>
                @endforeach
            </select>
             </div>

             <div class="form-group">
            <label  id="label_municipio"> Unidad 
            <select name="municipio_id" id="municipio_id" class="from-control seleccion">
            <option value="">Selecciona Lugar </option> 
                @foreach ($municipios as $municipio)
                    <option value="{{$municipio['id']}}"
                    @if ($municipio['id'] == $caso->lugar) selected @endif>
                    {{$municipio['nombre']}}
                    </option>
                @endforeach
            </select>
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
        @if(auth()->user()->hasRole(['admin']))  
        <div class="form-group">
        {{ Form::label('Oficial Asignado') }} <br>
        <select name="id_user" id="id_user" class="from-control seleccion">
        <option value="">Seleccionar usuario </option> 
        @foreach ($users as $user)
        <option value="{{ $user->id }}" {{ $user->id == $caso->id_user ? 'selected' : '' }}>
                {{ $user->apellido }} {{ $user->name }} (Grado: {{ $user->grado }})
            </option> 
        @endforeach
        </select>
        <input type="hidden" name="asignado" id="asignado" value="{{ $caso->user->apellido ?? '' }}" readonly>
        </div>
        @endrole
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>
<script>
     // Inicializar el valor del campo asignado
     document.addEventListener('DOMContentLoaded', function() {
        var selectedUserName = document.querySelector('#id_user option:checked').textContent;
        document.getElementById('asignado').value = selectedUserName;
    });

    // Agregar un evento al cambiar la selección del usuario
    document.getElementById('id_user').addEventListener('change', function() {
        var selectedUserName = this.options[this.selectedIndex].text;
        document.getElementById('asignado').value = selectedUserName;
    });
</script>



