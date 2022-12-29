<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		table {
		  border: 1px solid black;
		  margin-left: auto;
		  margin-right: auto;
      text-align: center;
		}
	</style>
</head>
<body>	
  <table width="100%">
    <thead>
      <tr>
        <th>VENTAS</th>
      </tr>
    </thead>
  </table>

	<table width="100%">
    <thead>
      <tr>
        <td colspan="2">Cliente: {{ $factura->user->name }}</td>
        <td colspan="2">Factura Nº <font color="red">{{$factura->factura}}</font></td>
      </tr>
    </thead>
  </table>

  <table width="100%">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>$ Precio</th>
        <th>Imp. %</th>
        <th>$ Impuesto </th>
        <th>Total</th>
        <th>Fecha Emisión</th>
        <th>Estatus</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{$compra->productos->nombre}}</td>
        <td>{{ number_format($compra->precio,2,',','.')}}</td>
        <td>{{ number_format($compra->impuesto,2,',','.')}}</td>
        <td>{{ number_format(($compra->precio*$compra->impuesto)/100,2,',','.')}}</td>
        <td>$ {{number_format($compra->precio+(($compra->precio*$compra->impuesto)/100),2,',','.')}}</td>
        <td>{{ $factura->created_at }}</td>
        <td>
          @switch($factura->status)
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
      </tbody>
    </table>

    <table width="100%">
    <thead>
      <tr>
        <td>Gracias por su compra...!</td>
      </tr>
    </thead>
  </table>
  </body>
</html>