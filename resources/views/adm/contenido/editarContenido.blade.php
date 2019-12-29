@extends('adm.main')

@section('titulo', 'Editar Contenido')

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
				{!!Form::model($contenido, ['route'=>['contenido.update', $contenido->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					{{--
					<div class="input-field col s8">
						{!!Form::label('Ruta')!!}
						{!!Form::text('ruta',$contenido->ruta,['class'=>'validate'])!!}
					</div>
					 --}}
					<div class="input-field col s4 hide">
						{!!Form::label('Seccion')!!}
						{!!Form::text('seccion',$contenido->seccion,['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="file-field input-field col s8">
						<div class="btn">
							<span>Imagen</span>
							{!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',$contenido->imagen, ['class'=>'file-path validate', 'required']) !!}
						</div>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',$contenido->orden,['class'=>'validate', 'required'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Titulo Español')!!}
						{!!Form::text('titulo_es',$contenido->titulo_es, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Titulo English')!!}
						{!!Form::text('titulo_en',$contenido->titulo_en, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Titulo Portugues')!!}
						{!!Form::text('titulo_br',$contenido->titulo_br, ['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Subtitulo Español')!!}
						{!!Form::text('subtitulo_es',$contenido->subtitulo_es, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Subtitulo English')!!}
						{!!Form::text('subtitulo_en',$contenido->subtitulo_en, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Subtitulo Portugues')!!}
						{!!Form::text('subtitulo_br',$contenido->subtitulo_br, ['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<div>{!!Form::label('Texto Español')!!}</div>
						{!!Form::textarea('texto_es',$contenido->texto_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Texto English')!!}</div>
						{!!Form::textarea('texto_en',$contenido->texto_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Texto Portugues')!!}</div>
						{!!Form::textarea('texto_br',$contenido->texto_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
				</div>
				@if($contenido->seccion == 'exportacion')
					<div class="row">
						<div class="input-field col s4">
							<div>{!!Form::label('Texto 2 Español')!!}</div>
							{!!Form::textarea('texto2_es',$contenido->texto2_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
						</div>
						<div class="input-field col s4">
							<div>{!!Form::label('Texto 2 English')!!}</div>
							{!!Form::textarea('texto2_en',$contenido->texto2_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
						</div>
						<div class="input-field col s4">
							<div>{!!Form::label('Texto 2 Portugues')!!}</div>
							{!!Form::textarea('texto2_br',$contenido->texto2_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
						</div>
					</div>
					@endif
					<div class="col s12 no-padding">
						{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
					</div>
					{!!Form::close()!!}
			</div>
		</div>
	</div>
</main>

<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('texto_es');
	CKEDITOR.replace('texto_en');
	CKEDITOR.replace('texto_br');
	CKEDITOR.config.width = '100%';
</script>
@if($contenido->seccion == 'exportacion')
	<script type="text/javascript">
		CKEDITOR.replace('texto2_es');
		CKEDITOR.replace('texto2_en');
		CKEDITOR.replace('texto2_br');
	</script>
	@endif
	@endsection