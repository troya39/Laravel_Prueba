@extends('layouts.app')

@section('content')
	<div class="container"> 
		<div class="col-auto p-2 text-center">
	    	@include('layouts.navigation')
	    </div>

	    <h4>
	        <b>Producto > Agregar</b>
	    </h4>

	    <hr> 

	    <div class="col-md-12">
	    	<form action="{{route('producto.update',$producto->id)}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	    		@method('PUT')

	    		{!! csrf_field() !!}

	    		@include('alerts.productos.errosEdit')

		    	<div class="row justify-content-center">
				    <div class="col-md-3">
						<label for="producto" class="form-label">
							<font color="red">*</font>
							Nombre del Producto
						</label>
						<input type="text" class="form-control" id="producto" name="producto" value="{{ $producto->nombre }}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<label for="precio" class="form-label">
							<font color="red">*</font>
							Precio
						</label>
						<input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<label for="impuesto" class="form-label">
							<font color="red">*</font>
							Impuesto
						</label>
						<input type="number" class="form-control" id="impuesto" name="impuesto" value="{{ $producto->impuesto }}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<label for="cantidad" class="form-label">
							<font color="red">*</font>
							Cantidad
						</label>
						<input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<label for="imagen" class="form-label">
							<font color="red">*</font>
							imagen
						</label>
						<input accept="image/*" type="file" class="form-control" id="imagen" name="imagen" value="{{ $producto->imagen }}">
						@php 
							$fotop = $producto->imagen
						@endphp
						
			            @switch($fotop)
			                @case(true)
			                  <img id="foto1" src="{{ asset($producto->imagen) }}" alt=""  width="150px" height="150px" /><br>
			                @break

			                @case(false)
			                  <img id="foto1" src="{{ asset('image/app/close.png') }}" alt=""  width="150px" height="150px"/><br>
			                @break
			            @endswitch
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3 text-center" style="margin-top: 10px">
						<button type="submit" class="btn btn-sm btn-success">Editar</button>
						<button type="reset" class="btn btn-sm btn-dark">Borra</button>
					</div>
				</div>

				<div class="text-center col-md-12">
		            <small>
		              Todos los campos con asteriscos (<font color="red">*</font>) rojos son obligatorios
		            </small>
		        </div>
			</form>
		</div>
	</div>
@endsection