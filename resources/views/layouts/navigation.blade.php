
@if (Auth::user()->tipo_usuario == 1)
	<a href="{{URL::to('/productos/create')}}" title="Registrar Producto">
		<button type="button" class="btn btn-sm btn-primary">
		    Agregar Producto
		</button>
	</a>

	<a href="{{URL::to('/facturasAll')}}" title="Todas las facturas Emitidas">
		<button type="button" class="btn btn-sm btn-primary">
		    Todas las Facturas
		</button>
	<a>

	<a href="{{URL::to('/comprasAll')}}" title="Todas las compras Emitidas">
		<button type="button" class="btn btn-sm btn-primary">
		   Todas las Compras
	 	</button>
	<a>
@endif

<a href="{{URL::to('/productos')}}" title="Ir a Productos">
	<button type="button" class="btn btn-sm btn-primary">
	    Productos
	</button>
<a>

<a href="{{URL::to('/facturas')}}" title="Ir a mis facturas">
	<button type="button" class="btn btn-sm btn-primary">
	    Mis Facturas
	</button>
</a>

<a href="{{URL::to('/compras')}}" title="Ir a mis compras">
	<button type="button" class="btn btn-sm btn-primary">
	    Mis Compras
	</button>
</a>

 