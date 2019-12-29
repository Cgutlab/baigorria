@extends('adm.main')

@section('titulo', 'Editar Categoria')

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
				{!!Form::model($categoria, ['route'=>['categoria.update', $categoria->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					{{--
					<div class="input-field col s8">
						{!!Form::label('Ruta')!!}
						{!!Form::text('ruta',$categoria->ruta,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4 hide">
						{!!Form::label('Seccion')!!}
						{!!Form::text('seccion',$categoria->seccion,['class'=>'validate'])!!}
					</div>
					--}}
				</div>

				<div class="row">
					<div class="file-field input-field col s8">
						<div class="btn">
							<span>Imagen</span>
							{!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',$categoria->imagen, ['class'=>'file-path validate', 'required']) !!}
						</div>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',$categoria->orden,['class'=>'validate', 'required'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Titulo Español')!!}
						{!!Form::text('titulo_es',$categoria->titulo_es, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Titulo English')!!}
						{!!Form::text('titulo_en',$categoria->titulo_en, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Titulo Portugues')!!}
						{!!Form::text('titulo_br',$categoria->titulo_br, ['class'=>'validate'])!!}
					</div>
				</div>

				{{--
				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Subtitulo Español')!!}
						{!!Form::text('subtitulo_es',$categoria->subtitulo_es, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Subtitulo English')!!}
						{!!Form::text('subtitulo_en',$categoria->subtitulo_en, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Subtitulo Portugues')!!}
						{!!Form::text('subtitulo_br',$categoria->subtitulo_br, ['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<div>{!!Form::label('Texto Español')!!}</div>
						{!!Form::textarea('texto_es',$categoria->texto_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Texto English')!!}</div>
						{!!Form::textarea('texto_en',$categoria->texto_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Texto Portugues')!!}</div>
						{!!Form::textarea('texto_br',$categoria->texto_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
				</div>
				--}}

				<div class="col s12 no-padding">
					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}
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