@if ($message = Session::get('danger'))
	<div class="alert alert-danger alert-block">   
	    <a href="{{route('productos')}}" title="Cerrar ventana">
	    	<img src="{{asset('image/app/close.png')}}" alt="" width="25px">
	    </a>
	    <strong>{{ $message }}</strong>
	</div>
@endif