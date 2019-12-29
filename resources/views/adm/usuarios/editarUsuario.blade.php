@extends('adm.main')

@section('titulo', 'Editar usuario')

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
				{!!Form::model($user, ['route'=>['usuarios.update', $user->id], 'method'=>'PUT'])!!}
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
						{!!Form::password('password',['class'=>'validate'])!!}
						{!!Form::label('Contraseña')!!}
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

@endsection
