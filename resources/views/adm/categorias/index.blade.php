@extends('adm.main')

@section('titulo', 'Editar Categorias')

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
						<td>Imagen</td>
						<td>Titulo Español</td>
						<td>Orden</td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
						@foreach($categoria as $dato)
						<tr>
							<td><img src="{{ asset('img/categorias/'.$dato->imagen)}}" style="height: 80px;"></td>
							<td><span>{!! $dato->titulo_es !!}</span></td>
							<td><span>{!! $dato->orden !!}</span></td>
							<td class="text-right">
								<a href="{{ route('categoria.edit',$dato->id) }}"><i class="material-icons">create</i></a>
								{!!Form::open(['class'=>'en-linea', 'route'=>['categoria.destroy', $dato->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm_delete()'])!!}
								<button type="submit" class="submit-button">
									<i class="material-icons red-text">cancel</i>
								</button>
								{!!Form::close()!!}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $categoria->render() !!}
			</div>
		</div>
	</div>
</main>
@include('adm/eliminar')

@endsection