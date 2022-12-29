@extends('layouts.app')

@section('content')
    <div class="container">  
	    <div class="col-auto p-2 text-center">
	    	@include('layouts.navigation')
	    </div>
	    
	    <h4>
	    	<b>Productos > Listado</b>
	    </h4>

	    <hr> 

	    <div class="col-md-12"> 
	    	@include('alerts.productos.success')

	        <div class="row gy-4">
	            @foreach ($productos as $prod)
	                <div class="col-md-2">
	                    <div class="card" style="width: 200px;"> 
	                        <img class="card-img-top img.redimension" src="{{asset($prod->imagen)}}" alt="" width="150px" height="150px">
	                           
	                        <div class="card-body text-center">
	                            <h5 class="card-title"><b>{{ $prod->nombre }}</b></h5>

	                            <table class="table table-bordered">
	                                <tbody>
	                                    <tr>
	                                        <td><font size="2">Precio $</font></td>
	                                        <td>
	                                            @php 
	                                            	$precio = $prod->precio 
	                                            @endphp
	                                            
	                                            <font size="2">{{ number_format($prod->precio,2,',','.') }}</font>
	                                        </td>
	                                    </tr>

	                                    <tr>
	                                        <td><font size="2">Imp. {{ $prod->impuesto }} %</font></td>
	                                        <td>
	                                            @php 
	                                            	$impuesto = ($prod->precio * $prod->impuesto)/100 
	                                            @endphp

	                                            <font size="2">
	                                            	{{ number_format(($prod->precio * $prod->impuesto)/100,2,',','.') }}
	                                            </font>   
	                                        </td>
	                                    </tr>

	                                    <tr>
	                                        <td><font size="2"><b>Total</b></font></td>
	                                        <td>
	                                            <font size="2">$ {{ number_format($precio + $impuesto,2,',','.') }}</font>
	                                        </td>
	                                    </tr>

	                                    <tr>
	                                    	<td colspan="2">
	                                    		<a href="#" class="btn btn-sm btn-dark">Stock: {{ $prod->cantidad }} </a>
	                                    	</td>
	                                    </tr>
	                                </tbody>
	                            </table>

	                            @if (Auth::user()->tipo_usuario == 1)
		                            <form action="{{route('productoDelete.destroy',$prod->id)}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		    							@method('DELETE')
		    							{!! csrf_field() !!}
			                            <button type="submit" class="btn btn-sm btn-light" title="Eliminar">
			                            	<img src="{{asset('image/app/close.png')}}" alt="" width="20px;">
			                            </button>
			                        </form>

		                            <a href="{{route('producto.edit', $prod->id)}}" class="btn btn-sm btn-light" title="Editar">
		                            	<img src="{{asset('image/app/edit.png')}}" alt="" width="20px;">
		                            </a>
		                        @endif
	                   
		                        <a href="{{ URL::to('agregarProdcutos/'.$prod->id.'/') }}" class="btn btn-sm btn-light" title="Agregar">
		                        	<img src="{{asset('image/app/add.png')}}" alt="" width="20px;">
		                        </a>
	                        </div>
	                    </div>
	                </div>
	            @endforeach
	        </div>
	    </div>
    </div>
@endsection
