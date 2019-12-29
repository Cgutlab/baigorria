@extends('adm.main')

@section('titulo', 'Editar Cliente')

@section('cuerpo')

<main>
	<div class="container">
		@if(count($errors) > 0)
		<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
			<ul>
				@foreach($errors->all() as $error)
					<li>{!!$error!!}</li>
					@endforeach
			</ul>
		</div>
		@endif
		@if(session('success'))
		<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
			{{ session('success') }}
		</div>
		@endif

		<div class="row">
			<div class="col-sm-12">
				{!!Form::model($user, ['route'=>['clientes.update', $user->id], 'method'=>'PUT'])!!}
				<div class="row">
					<div class="input-field col s4">
						<select name="precio_esparragos" required>
							<option value="a" @if($user->precio_esparragos == 'a') selected @endif>Categoria A</option>
							<option value="b" @if($user->precio_esparragos == 'b') selected @endif>Categoria B</option>
							<option value="c" @if($user->precio_esparragos == 'c') selected @endif>Categoria C</option>
							<option value="d" @if($user->precio_esparragos == 'd') selected @endif>Categoria D</option>
							<option value="e" @if($user->precio_esparragos == 'e') selected @endif>Categoria E</option>
							<option value="f" @if($user->precio_esparragos == 'f') selected @endif>Categoria F</option>
						</select>
						<label>Precio Esparragos</label>
					</div>
					<div class="input-field col s4">
						<select name="precio_bulones" required>
							<option value="a" @if($user->precio_bulones == 'a') selected @endif>Categoria A</option>
							<option value="b" @if($user->precio_bulones == 'b') selected @endif>Categoria B</option>
							<option value="c" @if($user->precio_bulones == 'c') selected @endif>Categoria C</option>
							<option value="d" @if($user->precio_bulones == 'd') selected @endif>Categoria D</option>
							<option value="e" @if($user->precio_bulones == 'e') selected @endif>Categoria E</option>
							<option value="f" @if($user->precio_bulones == 'f') selected @endif>Categoria F</option>
						</select>
						<label>Precio Bulones</label>
					</div>
					<div class="input-field col s4">
						<select name="precio_especial" required>
							<option value="a" @if($user->precio_especial == 'a') selected @endif>Categoria A</option>
							<option value="b" @if($user->precio_especial == 'b') selected @endif>Categoria B</option>
							<option value="c" @if($user->precio_especial == 'c') selected @endif>Categoria C</option>
							<option value="d" @if($user->precio_especial == 'd') selected @endif>Categoria D</option>
							<option value="e" @if($user->precio_especial == 'e') selected @endif>Categoria E</option>
							<option value="f" @if($user->precio_especial == 'f') selected @endif>Categoria F</option>
						</select>
						<label>Precio Piezas Especiales</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<select name="contenido_mostrar" required>
							@foreach($contenidos as $contenido)
							<option value="{{$contenido->orden}}" @if($user->contenido_mostrar == $contenido->orden) selected @endif>{{$contenido->titulo_es}}</option>
							@endforeach
						</select>
						<label>Contenido Mostrar</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<label for="">Nombre</label>
						{!!Form::text('first_name',$user->first_name,['class'=>''])!!}
					</div>
					<div class="input-field col s12">
						<label for="">Apellido</label>
						{!!Form::text('last_name',$user->last_name,['class'=>''])!!}
					</div>
					<div class="input-field col s12">
						<label for="">Razón Social</label>
						{!!Form::text('razon_social',$user->razon_social,['class'=>''])!!}
					</div>
					<div class="input-field col s12">
						<label for="">Correo</label>
						{!!Form::email('user',$user->user,['class'=>''])!!}
					</div>
					<div class="input-field col s12">
						<label for="">Contraseña</label>
						{!!Form::password('password',null,['class'=>''])!!}
					</div>
					<div class="input-field col s12">
						<label for="">Teléfono</label>
						{!!Form::text('phone',$user->phone,['class'=>''])!!}
					</div>
					<div class="input-field col s12">
						<label for="">Dirección</label>
						{!!Form::text('address',$user->address,['class'=>''])!!}
					</div>
					<div class="input-field col s12">
						<label for="">Localidad</label>
						{!!Form::text('localidad',$user->localidad,['class'=>''])!!}
					</div>
				</div>
				<div class="row">
					<div class="input-field col s4">
						<select name="habilitado" required>
							<option value="on" @if($user->habilitado == 'on') selected @endif>Habilitar</option>
							<option value="off" @if($user->precio_especial == 'off') selected @endif>Deshabilitar</option>
						</select>
						<label>Habilitar cliente</label>
					</div>
				</div>
				{!!Form::hidden('id', $user->id)!!}
				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>
				{!!Form::close()!!}
			</div>
		</div>
	</div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('select').formSelect();
	});
</script>
@endsection