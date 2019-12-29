@extends('adm.main')

@section('titulo', 'Editar Presentacion')

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
				<table class="highlight bordered">
					<thead>
						<td>Producto</td>
						<td>Imagenes</td>
						<td>Codigo</td>
						<td>Titulo Español</td>
						<td>Orden</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
						@foreach($presentacion as $dato)
						<tr>
							<td><span>{!! $dato->productos->titulo_es !!}</span></td>
							<td>
								<div>
									@if($dato->imagen1)
										<img src="{{ asset('img/presentaciones/'.$dato->imagen1)}}" style="height: 80px;">
										@endif
										@if($dato->imagen2)
											<img src="{{ asset('img/presentaciones/'.$dato->imagen2)}}" style="height: 80px;">
											@endif
								</div>
								<div>
									@if($dato->imagen3)
										<img src="{{ asset('img/presentaciones/'.$dato->imagen3)}}" style="height: 80px;">
										@endif
										@if($dato->imagen4)
											<img src="{{ asset('img/presentaciones/'.$dato->imagen4)}}" style="height: 80px;">
											@endif
								</div>
							</td>
							<td><span>{!! $dato->codigo !!}</span></td>
							<td><span>{!! $dato->titulo_es !!}</span></td>
							<td><span>{!! $dato->orden !!}</span></td>
							<td class="text-right">
								<a href="{{ route('presentacion.edit',$dato->id) }}"><i class="material-icons">create</i></a>
								{!!Form::open(['class'=>'en-linea', 'route'=>['presentacion.destroy', $dato->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm_delete()'])!!}
								<button type="submit" class="submit-button">
									<i class="material-icons red-text">cancel</i>
								</button>
								{!!Form::close()!!}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $presentacion->render() !!}
			</div>
		</div>
	</div>
</main>
@include('adm/eliminar')

@endsection