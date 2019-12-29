@extends('adm.main')

@section('titulo', 'Crear Presentacion')

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
				{!!Form::open(['route'=>'presentacion.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					{{--
					<div class="input-field col s8">
						{!!Form::label('Ruta')!!}
						{!!Form::text('ruta',null,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s4 hide">
						{!!Form::label('Seccion')!!}
						{!!Form::text('seccion',null,['class'=>'validate'])!!}
					</div>
					--}}
				</div>

				<div class="row">
					<div class="input-field col s4">
						<select name="id_producto" required>
							@foreach($selectCategorias as $selectCategoria)
							<optgroup label="{{$selectCategoria->titulo_es}}">
								@foreach($selectProductos as $selectProducto)
								@if($selectProducto->id_categoria == $selectCategoria->id)
									<option value="{{$selectProducto->id}}">{{$selectProducto->titulo_es}}</option>
									@endif
									@endforeach
							</optgroup>
							@endforeach
						</select>
						<label>Producto</label>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Precio')!!}
						{!!Form::number('precio',null,['class'=>'validate', 'step' => 'any'])!!}
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',null,['class'=>'validate', 'required'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col l2 s4">
						{!!Form::label('Precio A')!!}
						{!!Form::number('precio_a',null,['class'=>'validate', 'step' => 'any'])!!}
					</div>
					<div class="input-field col l2 s4">
						{!!Form::label('Precio B')!!}
						{!!Form::number('precio_b',null,['class'=>'validate', 'step' => 'any'])!!}
					</div>
					<div class="input-field col l2 s4">
						{!!Form::label('Precio C')!!}
						{!!Form::number('precio_c',null,['class'=>'validate', 'step' => 'any'])!!}
					</div>
					<div class="input-field col l2 s4">
						{!!Form::label('Precio D')!!}
						{!!Form::number('precio_d',null,['class'=>'validate', 'step' => 'any'])!!}
					</div>
					<div class="input-field col l2 s4">
						{!!Form::label('Precio E')!!}
						{!!Form::number('precio_e',null,['class'=>'validate', 'step' => 'any'])!!}
					</div>
					<div class="input-field col l2 s4">
						{!!Form::label('Precio F')!!}
						{!!Form::number('precio_f',null,['class'=>'validate', 'step' => 'any'])!!}
					</div>
				</div>

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

				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('Codigo Presentacion')!!}
						{!!Form::text('codigo',null,['class'=>'validate', 'required'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('Codigo OEM')!!}
						{!!Form::text('oem',null,['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="file-field input-field col s6">
						<div class="btn">
							<span>Ficha</span>
							{!! Form::file('ficha') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',null, ['class'=>'file-path validate']) !!}
						</div>
					</div>
					<div class="input-field col s6">
						{!!Form::label('Tipo/type')!!}
						{!!Form::text('tipo',null,['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('Marca')!!}
						{!!Form::text('marca',null,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('Modelo')!!}
						{!!Form::text('modelo',null,['class'=>'validate'])!!}
					</div>
				</div>

				<div class="center-align">
					<table class="highlight bordered responsive-table">
						<tbody>
							<tr>
								<td>
									{!!Form::label('ø "A" PASO')!!}
									{!!Form::text('medida_a',null,['class'=>'validate'])!!}
								</td>
								<td>
									{!!Form::label('Hexágono "B" .mm')!!}
									{!!Form::text('medida_b',null,['class'=>'validate'])!!}
								</td>
								<td>
									{!!Form::label('Altura "C" .mm')!!}
									{!!Form::text('medida_c',null,['class'=>'validate'])!!}
								</td>
								<td>
									{!!Form::label('D')!!}
									{!!Form::text('medida_d',null,['class'=>'validate'])!!}
								</td>
								<td>
									{!!Form::label('"E" DIÁMETRO Y PASO')!!}
									{!!Form::text('medida_e',null,['class'=>'validate'])!!}
								</td>
								<td>
									{!!Form::label('F')!!}
									{!!Form::text('medida_f',null,['class'=>'validate'])!!}
								</td>
								<td>
									{!!Form::label('G')!!}
									{!!Form::text('medida_g',null,['class'=>'validate'])!!}
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<div class="row">
					<div class="input-field col s6">
						{!!Form::label('Dureza')!!}
						{!!Form::text('dureza',null,['class'=>'validate'])!!}
					</div>
					<div class="input-field col s6">
						{!!Form::label('Terminacion')!!}
						{!!Form::text('terminacion',null,['class'=>'validate'])!!}
					</div>
				</div>

				<div class="row">
					<div class="file-field input-field col s6">
						<div class="btn">
							<span>Imagen1</span>
							{!! Form::file('imagen1') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',null, ['class'=>'file-path validate']) !!}
						</div>
					</div>
					<div class="file-field input-field col s6">
						<div class="btn">
							<span>Imagen2</span>
							{!! Form::file('imagen2') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',null, ['class'=>'file-path validate']) !!}
						</div>
					</div>
					<div class="file-field input-field col s6">
						<div class="btn">
							<span>Imagen3</span>
							{!! Form::file('imagen3') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',null, ['class'=>'file-path validate']) !!}
						</div>
					</div>
					<div class="file-field input-field col s6">
						<div class="btn">
							<span>Imagen4</span>
							{!! Form::file('imagen4') !!}
						</div>
						<div class="file-path-wrapper">
							{!! Form::text('',null, ['class'=>'file-path validate']) !!}
						</div>
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
				</div>
				--}}

				<div class="row">
					<div class="input-field col s4">
						<div>{!!Form::label('Cantidad Por Caja')!!}</div>
						{!!Form::number('cantidadxcaja',null, ['class'=>'validate'])!!}
					</div>
				</div>

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
</script>
--}}
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('plugins/materialize/js/materialize.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('select').formSelect();
	});
</script>
@endsection