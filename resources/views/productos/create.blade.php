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
	    	<form action="{{route('producto.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	    		{!! csrf_field() !!}

	    		@include('alerts.productos.errors')

		    	<div class="row justify-content-center">
				    <div class="col-md-3">
						<label for="producto" class="form-label">
							<font color="red">*</font>
							Nombre del Producto
						</label>
						<input type="text" class="form-control" id="producto" name="producto" value="{{old('producto')}}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<label for="precio" class="form-label">
							<font color="red">*</font>
							Precio
						</label>
						<input type="number" class="form-control" id="precio" name="precio" value="{{old('precio')}}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<label for="impuesto" class="form-label">
							<font color="red">*</font>
							Impuesto
						</label>
						<input type="number" class="form-control" id="impuesto" name="impuesto" value="{{old('impuesto')}}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<label for="cantidad" class="form-label">
							<font color="red">*</font>
							Cantidad
						</label>
						<input type="number" class="form-control" id="cantidad" name="cantidad" value="{{old('cantidad')}}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3">
						<label for="imagen" class="form-label">
							<font color="red">*</font>
							imagen
						</label>
						<input accept="image/*" type="file" class="form-control" id="imagen" name="imagen" value="{{old('imagen')}}">
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-md-3 text-center" style="margin-top: 10px">
						<button type="submit" class="btn btn-sm btn-success">Agregar</button>
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