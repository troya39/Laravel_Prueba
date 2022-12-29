@extends('layouts.app')

@section('content')
    <div class="container">  
	    <div class="col-auto p-2 text-center">
	    	@include('layouts.navigation')
	    </div>

	    <h4>
	        <b>Facturas > Emitidas > Todas > Listado</b>
	    </h4>

	    <hr>

	    <div class="col-md-12"> 
	    	@include('alerts.facturas.success')

	    	<div class="table-responsive-md">
		       	<table id="example1" class="table table-bordered table-striped table-hover">
	                <thead>
	                	<tr>
		                    <th>#</th>
		                    <th>Cliente</th>
		                    <th>Nº Fact.</th>
		                    <th>Producto</th>
		                    <th>Nombre</th>
		                    <th>$ Precio</th>
		                    <th>$ Impuesto </th>
		                    <th>Total</th>
		                    <th>Fecha Emisión</th>
		                    <th>Estatus</th>
		                    <th>Opciones</th>
	                  	</tr>
	                </thead>

	                @php 
	                	$i=1
	                @endphp

	                <tbody>
	                    @foreach ($factura as $f)
	                    	<tr>
		                        <td>{{ $i }}</td>
		                        <td>{{ $f->user->name }}</td>
		                        <td><font color="red">{{ $f->factura }}</font></td>
		                        <td><img src="{{ $f->compras->productos->imagen }}" alt="" width="50px;"></td>
		                        <td>{{ $f->compras->productos->nombre }}</td>
		                        <td title="Precio base">
		                        	{{ number_format($f->compras->productos->precio,2,',','.') }}
		                        </td>
		                        <td title="Impuesto  {{$f->compras->productos->impuesto}}%">
		                        	@php  
		                        		$precioBase = $f->compras->productos->precio;
		                        		$porcentaje = $f->compras->productos->impuesto; 
		                        		$impuesto   = ($precioBase*$porcentaje)/100;
		                        	@endphp

		                        	{{ number_format($impuesto,2,',','.') }}
		                        </td>

		                        <td>{{ number_format($precioBase+$impuesto,2,',','.') }}</td>

		                        <td>{{$f->created_at}}</td>

		                        <td>
		                        	@switch($f->status)
			                          @case(0)
			                            Eliminada
			                          @break
			                              
			                          @case(1)
			                            Emitida
			                          @break

			                          @case(2)
			                            Pendiente
			                          @break
			                        @endswitch
		                        </td>

		                        <td>                    
		                            <div class="row">
			                            <div class="col-md-3">
				                            <div class="col-md-2">
					                            <a href="{{ URL::to('facturas/'.$f->factura.'/') }}" class="btn btn-sm btn-warning">
					                            	Factura
					                            </a>
					                        </div>
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
	            	Total de facturas emitidas: {{$factura->count()}} 
	            </button>
	        </div>
	    </div>
    </div>
@endsection