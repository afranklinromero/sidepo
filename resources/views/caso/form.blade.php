<style>
    input[type="text"], textarea {
        text-transform: uppercase;
    }
</style>
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="box box-info padding-1">
    
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('caso') }}
            {{ Form::text('caso', $caso->caso, ['class' => 'form-control' . ($errors->has('caso') ? ' is-invalid' : ''), 'placeholder' => 'Caso']) }}
            {!! $errors->first('caso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_denuncia') }}
            {{ Form::date('fecha_denuncia', $caso->fecha_denuncia, ['class' => 'form-control' . ($errors->has('fecha_denuncia') ? ' is-invalid' : ''), 'placeholder' => 'fecha denuncia']) }}
            {!! $errors->first('fecha_denuncia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       
        <div class="form-group">
            {{ Form::label('placa') }}
            {{ Form::text('placa', $caso->placa, ['class' => 'form-control' . ($errors->has('placa') ? ' is-invalid' : ''), 'placeholder' => 'Placa']) }}
            {!! $errors->first('placa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo vehiculo') }}
            {{ Form::text('vehiculo', $caso->vehiculo, ['class' => 'form-control' . ($errors->has('vehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo']) }}
            {!! $errors->first('vehiculo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('marca') }}
            {{ Form::text('marca', $caso->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca']) }}
            {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipo') }}
            {{ Form::text('tipo', $caso->tipo, ['class' => 'form-control' . ($errors->has('tipo') ? ' is-invalid' : ''),'placeholder' => 'Tipo']) }}
            {!! $errors->first('tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('color') }}
            {{ Form::text('color', $caso->color, ['class' => 'form-control' . ($errors->has('color') ? ' is-invalid' : ''),'placeholder' => 'Color']) }}
            {!! $errors->first('color', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('modelo') }}
            {{ Form::number('modelo', $caso->modelo, ['class' => 'form-control' . ($errors->has('modelo') ? ' is-invalid' : ''),  'placeholder' => 'Año de fabricación']) }}
            {!! $errors->first('modelo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('chasis') }}
            {{ Form::text('chasis', $caso->chasis, ['class' => 'form-control' . ($errors->has('chasis') ? ' is-invalid' : ''), 'placeholder' => 'Chasis']) }}
            {!! $errors->first('chasis', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hecho') }}
            {{ Form::text('hecho', $caso->hecho, ['class' => 'form-control' . ($errors->has('hecho') ? ' is-invalid' : ''), 'placeholder' => 'robo, hurto']) }}
            {!! $errors->first('hecho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $caso->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apaterno') }}
            {{ Form::text('apaterno', $caso->apaterno, ['class' => 'form-control' . ($errors->has('apaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido paterno']) }}
            {!! $errors->first('apaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amaterno') }}
            {{ Form::text('amaterno', $caso->amaterno, ['class' => 'form-control' . ($errors->has('amaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido materno']) }}
            {!! $errors->first('amaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ci') }}
            {{ Form::text('ci', $caso->ci, ['class' => 'form-control' . ($errors->has('ci') ? ' is-invalid' : ''), 'placeholder' =>'Ci']) }}
            {!! $errors->first('ci', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechahecho') }}
            {{ Form::date('fechahecho', $caso->fechahecho, ['class' => 'form-control' . ($errors->has('fechahecho') ? ' is-invalid' : ''), 'placeholder' => 'fecha del hecho']) }}
            {!! $errors->first('fechahecho', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       
        
        <div class="form-group">
    <label for="detalle">Detalle</label><br>
    <textarea style="text-transform:uppercase" name="detalle" id="detalle" rows="4" cols="50" maxlength="1200" oninput="mostrarContador(this)" class="form-control{{ $errors->has('detalle') ? ' is-invalid' : '' }}" placeholder="Breve detalle">{{ $caso->detalle }}</textarea>
    @if ($errors->has('detalle'))
        <div class="invalid-feedback">{{ $errors->first('detalle') }}</div>
    @endif
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
            {{ Form::label('estado') }}
            {{ Form::text('estado', $caso->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'INVESTIGACION, RESUELTO']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       
        

            <div class="form-group">
            <label  id="label_departamento"> Regional 
            <select name="departamento_id" id="departamento_id" class="from-control seleccion">
            <option value="">Selecciona Regional </option> 
                @foreach ($departamentos as $departamento)
                    <option value="{{$departamento['id']}}">{{$departamento['nombre']}}
                    </option>
                @endforeach
            </select>
            </div>
               
            <div class="form-group">
                <label for="municipio">Lugar</label> 
                    <select name="municipio_id"  id="municipio_id" class="from-control seleccion"></select>
                 
                    @if ($errors->has('municipio_id'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->firts('municipio_id') }} </strong>
                    </span>
                    @endif
            
             </div>
             <div class="form-group">
            {{ Form::label('grupo_designado') }}
            {{ Form::text('grupo_designado', $caso->grupo_designado, ['class' => 'form-control' . ($errors->has('grupo_designado') ? ' is-invalid' : ''),'placeholder' => 'Grupo Designado']) }}
            {!! $errors->first('grupo_designado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
       
        
        
        <div class="form-group">

        
            {{ Form::label('Oficial Asignado') }} <br>
            <input type="text" id="user_search" class="form-control" placeholder="Buscar usuario">
            <select name="id_user" id="id_user" class="from-control seleccion">
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
       
         
        <input type="hidden" name="asignado" id="asignado" value="{{ $caso->user->name ?? '' }}" readonly>
        
        <input type="hidden" name="pdf" id="pdf" value="0" readonly>
    
    </div>



    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Registrar') }}</button>
    </div>
</div>

<script>
     // Función para filtrar las opciones de la lista desplegable
     function filterOptions(searchTerm) {
        searchTerm = searchTerm.toLowerCase();
        var select = document.getElementById('id_user');
        var options = select.getElementsByTagName('option');
        
        for (var i = 0; i < options.length; i++) {
            var option = options[i];
            var optionText = option.textContent.toLowerCase();
            
            // Mostrar u ocultar opciones basadas en la búsqueda
            if (optionText.includes(searchTerm) || searchTerm === '') {
                option.style.display = '';
            } else {
                option.style.display = 'none';
            }
        }
    }

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

    // Agregar un evento de entrada para el campo de búsqueda
    document.getElementById('user_search').addEventListener('input', function() {
        var searchTerm = this.value.trim().toLowerCase();
        filterOptions(searchTerm);
    });

</script>