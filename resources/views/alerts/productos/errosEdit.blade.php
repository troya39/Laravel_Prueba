@if (count($errors)>0)
	<div class="alert alert-danger alert-block">   
		<ul>
			@foreach($errors->all() as $error)
			    <li>{!!$error!!}</li>
			@endforeach
		</ul>
		<div class="text-center">
			<a href="{{route('producto.edit',$producto->id)}}" title="Cerrar ventana">
				<button type="button" class="btn btn-sm btn-dark">Cerrar</button>
			</a>
		</div>
	</div>
@endif