@extends('layouts.app')

@section('content')
	<div class="container">  
	    <div class="col-auto p-2 text-center">
	    	@include('layouts.navigation')
	    </div>

	    <h4>
	        <b>Factura > Emitida </b>
	    </h4>

	    <hr>  

	    <div class="col-md-12">
	    	<div class="m-0 row justify-content-center">
		    	<div class="card" style="width: 20rem;">
					<img src="{{asset($compra->productos->imagen)}}" class="card-img-top" alt="">

					<div class="card-body text-center">
						<p class="card-text">
				    		<img src="{{asset('image/app/ventas.png')}}" alt="" width="180px" height="60px">
				    	</p>

						<h5 class="card-title">{{$compra->productos->nombre}}</h5>

				    	<div class="table-responsive-md">	
					    	<table class="table">
								<thead>
								    <tr>
								    	<th colspan="4">
								    		# Factura Nº {{$factura->factura}}
								      	</th>
								    </tr>

								    <tr>
								    	<th scope="row">#</th>	
								      	<th colspan="1"> Cliente</th>
								      	<td colspan="2">{{ $factura->user->name }}</td>
								    </tr>
							  	</thead>

							  	<tbody>
								    <tr>
								      	<th scope="row">#</th>
								      	<th colspan="2">Precio base $</th>
								      	<td>{{ number_format($compra->precio,2,',','.')}}</td>
								    </tr>

								    <tr>
								      	<th scope="row">#</th>
								      	<th colspan="2">Imp. {{ $compra->impuesto }} %</th>
								      	<td>{{ number_format(($compra->precio*$compra->impuesto)/100,2,',','.')}}</td>
								    </tr>

								    <tr>
								      	<th scope="row"></th>
								      	<td colspan="2">TOTAL</td>
								      	<td>$ {{number_format($compra->precio+(($compra->precio*$compra->impuesto)/100),2,',','.')}}</td>
								    </tr>
								    
								    <tr>
								    	<th colspan="4" scope="2">{{ $factura->created_at }}</th>
								    </tr>
							  	</tbody>
							</table>
							<a href="{{ URL::to('facturasPdf/'.$factura->factura.'/') }}" class="btn btn-dark btn-sm" title="Comprobante del recibo">
	                    		Imprimir
	                  		</a>
				    	</div>
				  	</div>
				</div>
			</div>
	    </div>
	</div>
@endsection