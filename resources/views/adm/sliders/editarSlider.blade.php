@extends('adm.main')

@section('titulo', 'Editar Slider')

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
				{!!Form::model($slider, ['route'=>['slider.update', $slider->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					{{--
					<div class="input-field col s8">
						{!!Form::label('Ruta')!!}
						{!!Form::text('ruta',$slider->ruta,['class'=>'validate'])!!}
					</div>
					 --}}
					<div class="input-field col s4 hide">
						{!!Form::label('Seccion')!!}
						{!!Form::text('seccion',$slider->seccion,['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="file-field input-field col s8">
						<div class="btn">
							<span>Imagen</span>
							{!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',$slider->imagen, ['class'=>'file-path validate', 'required']) !!}
						</div>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',$slider->orden,['class'=>'validate', 'required'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<div>{!!Form::label('Titulo Español')!!}</div>
						{!!Form::textarea('titulo_es',$slider->titulo_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Titulo English')!!}</div>
						{!!Form::textarea('titulo_en',$slider->titulo_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Titulo Portugues')!!}</div>
						{!!Form::textarea('titulo_br',$slider->titulo_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s4">
						<div>{!!Form::label('Subtitulo Español')!!}</div>
						{!!Form::textarea('subtitulo_es',$slider->subtitulo_es, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Subtitulo English')!!}</div>
						{!!Form::textarea('subtitulo_en',$slider->subtitulo_en, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
					</div>
					<div class="input-field col s4">
						<div>{!!Form::label('Subtitulo Portugues')!!}</div>
						{!!Form::textarea('subtitulo_br',$slider->subtitulo_br, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
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
	CKEDITOR.replace('titulo_es');
	CKEDITOR.replace('subtitulo_es');
	CKEDITOR.replace('titulo_en');
	CKEDITOR.replace('subtitulo_en');
	CKEDITOR.replace('titulo_br');
	CKEDITOR.replace('subtitulo_br');
	CKEDITOR.config.width = '100%';
</script>

@endsection