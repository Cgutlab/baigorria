@extends('adm.main')

@section('titulo', 'Crear Banner')

@section('cuerpo')

<main>
	<div class="container fullwidth">
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
			<div class="col s12">
				{!!Form::open(['route'=>'banners.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					{{--
					<div class="input-field col s8">
						{!!Form::label('Ruta')!!}
						{!!Form::text('ruta',null,['class'=>'validate'])!!}
					</div>
					 --}}
					<div class="input-field col s4 hide">
						{!!Form::label('Seccion')!!}
						{!!Form::text('seccion',$seccion,['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="file-field input-field col s8">
						<div class="btn">
							<span>Imagen</span>
							{!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',null, ['class'=>'file-path validate', 'required']) !!}
						</div>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',null,['class'=>'validate', 'required'])!!}
					</div>
				</div>
				@if($seccion == 'home')
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('Video Youtube')!!}
						{!!Form::text('video',null, ['class'=>'validate', 'required'])!!}
						<b>Debes colocar solo el código del video (marcado en rojo)<br>Ejemplo: </b>
						<small>https://www.youtube.com/watch?v=<span style="color: red; font-weight: 700">QU7HfyEybM</span></small>
					</div>
				</div>
				@endif
				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Titulo Español')!!}
						{!!Form::text('titulo_es',null, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Titulo English')!!}
						{!!Form::text('titulo_en',null, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Titulo Portugues')!!}
						{!!Form::text('titulo_br',null, ['class'=>'validate'])!!}
					</div>
				</div>
				{{--
				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Subtitulo Español')!!}
						{!!Form::text('subtitulo_es',null, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Subtitulo English')!!}
						{!!Form::text('subtitulo_en',null, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Subtitulo Portugues')!!}
						{!!Form::text('subtitulo_br',null, ['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<div>{!!Form::label('Texto Español')!!}</div>
						{!!Form::textarea('texto_es',null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Texto English')!!}</div>
						{!!Form::textarea('texto_en',null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Texto Portugues')!!}</div>
						{!!Form::textarea('texto_br',null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
				</div> --}}


				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
				</div>

			</div>
			{!!Form::close()!!}
		</div>
	</div>
	</div>
</main>
{{--
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('texto_es');
	CKEDITOR.replace('texto_en');
	CKEDITOR.replace('texto_br');
	CKEDITOR.config.width = '100%';
</script> --}}

@endsection