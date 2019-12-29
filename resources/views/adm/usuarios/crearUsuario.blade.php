@extends('adm.main')

@section('titulo', 'Crear usuarios')

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
			{!!Form::open(['route'=>'usuarios.store', 'method'=>'POST', 'class' => 'col s12'])!!}
			<div class="row">
				<div class="input-field col s6">
					{!!Form::text('user',null,['class'=>'validate', 'required'])!!}
					{!!Form::label('Usuario')!!}
				</div>
				<div class="input-field col s6">
					{!!Form::text('email',null,['class'=>'validate', 'required'])!!}
					{!!Form::label('Correo Electronico')!!}
				</div>
				<div class="input-field col s6">
					{!!Form::password('password',['class'=>'validate', 'required'])!!}
					{!!Form::label('Contraseña')!!}
				</div>
				<div class="input-field col s6 hide">
					{!!Form::text('role','admin',['class'=>'validate'])!!}
					{!!Form::label('Role')!!}
				</div>
			</div>
			{!!Form::submit('crear', ['class'=>'waves-effect waves-light btn right'])!!}
			{!!Form::close()!!}
		</div>


		@endsection
