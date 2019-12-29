@extends('adm.main')

@section('titulo', 'Crear clientes')

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
			{!!Form::open(['route'=>'clientes.store', 'method'=>'POST', 'class' => 'col s12'])!!}
			<div class="row">
				<div class="input-field col s12">
					<label for="password">
						@lang('general.form_fname')</label>
						{!! Form::text('first_name', null, ['class'=>'', 'required']) !!}
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="password">
						@lang('general.form_lname')</label>
						{!! Form::text('last_name', null, ['class'=>'', 'required']) !!}
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="password">
						@lang('general.form_correo')</label>
						{!! Form::text('user', null, ['class'=>'', 'required']) !!}
				</div>
			</div>
			{{-- <div class="row">
					<div class="input-field col s12">
							<label for="password">
									@lang('general.form_correo')</label>
									{!! Form::email('email', null, ['class'=>'', 'required']) !!}
					</div>
			</div> --}}
			<div class="row">
				<div class="input-field col s12">
					<label for="password">
						@lang('general.form_pass')</label>
						{!! Form::password('password', null, ['class'=>'', 'required']) !!}
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="phone">
						@lang('general.form_telefono')</label>
						{!! Form::text('phone', null, ['class'=>'', 'required']) !!}
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<label for="address">
						@lang('general.form_direccion')</label>
						{!! Form::text('address', null, ['class'=>'']) !!}
				</div>
			</div>
		</div>
		{!!Form::submit('crear', ['class'=>'waves-effect waves-light btn right'])!!}
		{!!Form::close()!!}
	</div>


	@endsection