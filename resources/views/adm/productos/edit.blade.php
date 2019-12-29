@extends('adm.main')

@section('titulo', 'Editar Producto')

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
				{!!Form::model($producto, ['route'=>['producto.update', $producto->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					{{--
					<div class="input-field col s8">
						{!!Form::label('Ruta')!!}
						{!!Form::text('ruta',$producto->ruta,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4 hide">
						{!!Form::label('Seccion')!!}
						{!!Form::text('seccion',$producto->seccion,['class'=>'validate'])!!}
					</div>
					--}}
				</div>
				<div class="row">
					<div class="file-field input-field col s6">
						{!! Form::label('Categoria') !!}<br />
						{!! Form::select('id_categoria', $categoria, null, ['class' => 'form-control', 'required']) !!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',$producto->orden,['class'=>'validate', 'required'])!!}
					</div>
				</div>

				<div class="row">
					<div class="file-field input-field col s6">
						<div class="btn">
							<span>Imagen</span>
							{!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',$producto->imagen, ['class'=>'file-path validate', 'required']) !!}
						</div>
					</div>
					<div class="file-field input-field col s6">
						<div class="btn">
							<span>Plano</span>
							{!! Form::file('plano') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',$producto->plano, ['class'=>'file-path validate']) !!}
						</div>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Titulo Español')!!}
						{!!Form::text('titulo_es',$producto->titulo_es, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Titulo English')!!}
						{!!Form::text('titulo_en',$producto->titulo_en, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Titulo Portugues')!!}
						{!!Form::text('titulo_br',$producto->titulo_br, ['class'=>'validate'])!!}
					</div>
				</div>

				{{--
				<div class="row">
					<div class="input-field col s4">
						{!!Form::label('Subtitulo Español')!!}
						{!!Form::text('subtitulo_es',$producto->subtitulo_es, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Subtitulo English')!!}
						{!!Form::text('subtitulo_en',$producto->subtitulo_en, ['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Subtitulo Portugues')!!}
						{!!Form::text('subtitulo_br',$producto->subtitulo_br, ['class'=>'validate'])!!}
					</div>
				</div>
				--}}

				<div class="row">
					<div class="input-field col s4">
						<div>{!!Form::label('Texto Español')!!}</div>
						{!!Form::textarea('texto_es',$producto->texto_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Texto English')!!}</div>
						{!!Form::textarea('texto_en',$producto->texto_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Texto Portugues')!!}</div>
						{!!Form::textarea('texto_br',$producto->texto_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
				</div>

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
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('select').formSelect();
	});
</script>
@endsection