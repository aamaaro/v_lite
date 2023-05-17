<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo de Compra</title>
    <link rel="stylesheet" href="{{asset('css/recibo.css')}}">
    <style type="text/css">
        @page {
            width: 58mm;
            size: auto;
            margin: 0mm;
        }
    </style>
</head>

<body onload="window.print();window.close()" class="receipt">
    <div>
        <div class="text-center encabezado">
            <h1>DevTi POS Lite</h1>
            <p>Direccion:AV. PRINCIPAL SN</p>
            <p>RFC:XAXX010101000</p>
            <p>Telefono:555-555-5555</p>
        </div>
        <div class="info">
            <b>Folio:</b>&nbsp;&nbsp;{{$saleId}}&nbsp;&nbsp;
            <br>
            <b>Fecha:</b>&nbsp;&nbsp;{{\Carbon\Carbon::now()->format('d-m-Y H:i:s')}}&nbsp;&nbsp; <br>
            <b>Atiende:</b>&nbsp;&nbsp;{{Auth::user()->name}}&nbsp;&nbsp; <br>
            <hr>
        </div>
        <table class="table table-condensed table-sm" width="100%">
            <thead>
                <tr>
                    <th align="left">Descripcion</th>
                    <th align="center">Cant.</th>
                    <th align="center">Precio</th>
                    <th align="center">SubTotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{$item->description}}</td>
                    <td align="center">{{$item->quantity}} pz.</td>
                    <td align="center">{{number_format($item->price,2)}}</td>
                    <td align="center">{{number_format($item->quantity * $item->price,2)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <div>
                <table class="totales">
                    <thead>
                        <tr>
                            <th>Totales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan=2>Total:<b> ${{number_format($item->total,2)}}</b></td>
                        </tr>
                        <tr>
                            <td colspan=2>Efectivo:<b> ${{number_format($item->cash,2)}}</b></td>
                        </tr>
                        <tr>
                            <td colspan=2>Cambio:<b> ${{number_format($item->change,2)}}</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div>
            <small class="pie">
                <center>
                    <p>Gracias por su compra!</p>
                    <i>Copyright &copy; <b>DevTi MX</b><br> devti.mx@gmail.com</i>
                </center>
            </small>
        </div>
    </div>
</body>

</html>
