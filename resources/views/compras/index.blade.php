@extends('layouts.app')

@section('content')
    <div class="container"> 
    	<div class="col-auto p-2 text-center">
	    	@include('layouts.navigation')
	    </div>

	    <h4>
	        <b>Compras > Pendientes > Listado</b>
	    </h4>

	    <hr> 

	    <div class="col-md-12"> 
	    	@include('alerts.compras.success')

	    	<div class="table-responsive-md">
		       	<table id="example1" class="table table-bordered table-striped table-hover">
	                <thead>
	                	<tr>
		                    <th>#</th>
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
	                    @foreach ($compras as $c)
	                    	<tr>
		                        <td>{{ $i }}</td>

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
			                            <div class="col-md-3">
				                            <form action="{{route('compraDelete.destroy',$c->id)}}" method="post">
				    							@method('DELETE')
				    							{!! csrf_field() !!}
					                            <button type="submit" class="btn btn-sm btn-danger">Eliminar </button>
					                        </form>
					                    </div>

			                            <div class="col-md-3">
				                            <a href="{{ URL::to('compras/'.$c->id.'/') }}" class="btn btn-sm btn-success">
				                            	Comprar
				                            </a>
				                        </div>
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
	            	Total de compras pendientes: {{$compras->count()}} 
	            </button>
	        </div>
	    </div>
    </div>
@endsection