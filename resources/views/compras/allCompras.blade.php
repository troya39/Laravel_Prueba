@extends('layouts.app')

@section('content')
    <div class="container">  
	    <div class="col-auto p-2 text-center">
	    	@include('layouts.navigation')
	    </div>

	    <h4>
	        <b>Compras > Todas > Listado</b>
	    </h4>

	    <hr>  

	    <div class="col-md-12"> 
	    	@include('alerts.compras.success')

	    	<div class="table-responsive-md">
		       	<table id="example1" class="table table-bordered table-striped table-hover">
	                <thead>
	                	<tr>
		                    <th>#</th>
		                    <th>Cliente</th>
		                    <th>Foto</th>
		                    <th>Producto</th>
		                    <th>$ Precio</th>
		                    <th>$ Impuesto </th>
		                    <th>Total</th>
		                    <th>Fecha regístro</th>
		                    <th>Estatus</th>
		                    <th>Opciones</th>
	                  	</tr>
	                </thead>

	                @php 
	                	$i=1 
	                @endphp

	                <tbody>
	                    @foreach ($compra as $c)
	                    	<tr>
		                        <td>{{ $i }}</td>

		                        <td>{{ $c->user->name }}</td>

		                        <td><img src="{{asset($c->productos->imagen)}}" alt="" width="50px;"></td>

		                        <td>{{ $c->productos->nombre }}</td>

		                        <td title="Precio base">{{ number_format($c->precio,2,',','.')}}</td>

		                        <td title="Impuesto {{$c->impuesto}} %">
		                        	{{ number_format(($c->precio*$c->impuesto)/100,2,',','.') }}
		                        </td>

		                        <td>$ {{ number_format($c->precio+($c->precio*$c->impuesto)/100,2,',','.') }}</td>

		                        <td>{{ $fecha = date("d-m-Y / H:i:s",strtotime($c->created_at)) }}</td>
		                        
		                        <td>
		                        	@switch($c->status)
			                          @case(0)
			                            Eliminado
			                          @break
			                              
			                          @case(1)
			                            Comprado
			                          @break

			                          @case(2)
			                            Pendiente
			                          @break
			                        @endswitch
		                        </td>

		                        <td>                    
		                            <div class="row">
		                            	@if($c->status == 1)
				                            <div class="col-md-3">
						                        <a href="{{ URL::to('comprasMostrarFactura/'.$c->id.'/') }}" class="btn btn-sm btn-warning">
						                           Factura
						                        </a>
						                    </div>
					                    @endif
			                        </div>
	                        	</td>
	                      	</tr>
	                      	@php 
	                      		$i++ 
	                      	@endphp
	                   	@endforeach
	                </tbody>
	            </table>
	            <button type="button" class="btn btn-sm btn-dark">
	            	Total de compras pendientes: {{$compra->count()}} 
	            </button>
	        </div>
	    </div>
    </div>
@endsection