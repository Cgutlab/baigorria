@extends('adm.main')

@section('titulo', 'Editar Contenidos')

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
						<td>Titulo Español</td>
						<td>Seccion</td>
						<td></td>
						<td class="text-right">Acciones</td>
					</thead>
					<tbody>
						@foreach($contenidos as $contenido)
						<tr>
							<td><span>{!! $contenido->titulo_es !!}</span></td>
							<td><span>{!! $contenido->seccion !!}</span></td>
							@if($contenido->seccion == 'privatezone')
								<td><span>{!! $contenido->orden !!}</span></td>
								@endif
								<td class="text-right">
									<a href="{{ route('contenido.edit',$contenido->id) }}"><i class="material-icons">create</i></a>
									{{--
								{!!Form::open(['class'=>'en-linea', 'route'=>['contenido.destroy', $contenido->id], 'method' => 'DELETE'])!!}
								<button type="submit" class="submit-button">
									<i class="material-icons red-text">cancel</i>
								</button>
								 --}}
									{!!Form::close()!!}
								</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>
<style type="text/css">

</style>

@endsection