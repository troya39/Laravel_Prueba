@if ($message = Session::get('warning'))
	<div class="alert alert-warning alert-block">   
	    <a href="{{route('productos')}}" title="Cerrar ventana">
	    	<img src="{{asset('image/app/close.png')}}" alt="" width="25px">
	    </a>
	    <strong>{{ $message }}</strong>
	</div>
@endif