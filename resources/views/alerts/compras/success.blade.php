@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">   
	    <a href="{{route('compra')}}" title="Cerrar ventana">
	    	<img src="{{asset('image/app/close.png')}}" alt="" width="25px">
	    </a>
	    <strong>{{ $message }}</strong>
	</div>
@endif