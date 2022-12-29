@extends('layouts.app')

@section('content')
    <div class="container">  
    <h4>
        <b>Productos</b>
        <button type="submit" name="" class="btn btn-sm btn-primary">Agregar</button>
    </h4>
    <hr>     
        <div class="row">
            @php 
                $i = 0; 
            @endphp
            
            @foreach ($productos as $prod)
                <div class="col-sm-2">
                    <div class="card" style="width: 200px;"> 
                        <img class="card-img-top img.redimension" src="{{asset($prod->imagen)}}" alt="" width="150px" height="150px">
                           
                        <div class="card-body text-center">
                            <h5 class="card-title"><b>{{ $prod->nombre }}</b></h5>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><h6>Precio $</h6></td>
                                        <td>
                                            <h6><?php $precio = $prod->precio; ?></h6>
                                            {{ number_format($prod->precio,2,',','.') }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6>Imp. {{ $prod->impuesto }} %</h6></td>
                                        <td>
                                            <h6><?php $impuesto = ($prod->precio * $prod->impuesto)/100; ?></h6>
                                            {{ number_format(($prod->precio * $prod->impuesto)/100,2,',','.') }}   
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><h6><b>Total</b></h6></td>
                                        <td>
                                            <h6>$ {{ number_format($precio + $impuesto,2,',','.') }}</h6>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-sm btn-dark">Stock: {{ $prod->cantidad }} </a>
                            <a href="#" class="btn btn-sm btn-success">Agregar</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
