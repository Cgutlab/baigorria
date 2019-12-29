<!DOCTYPE html>
<html>

<body>
    <h2>Taller Baigorria</h2>
    <h3>Solicitud de Pedido</h3>
    <p>Enviado desde la web por: </p>

    Nombre: {{$nombre }}<br>
    Apellido: {{ $apellido}}<br>
    Email: {{$emailcliente}} <br>
    Telefono: {{$telefono}} <br>
    <br>

    <h3>Datos del Producto</h3>
    <table>
        <thead>
            <tr>
                <th style="text-align: left;">Producto</th>
                <th style="">Codigo</th>
                <th style="">Marca</th>
                <th style="">Modelo</th>
                <th style="">Terminacion</th>
                <th>Cantidad</th>
                <th style="text-align: right;">Precio unitario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $producto)
            <tr>
                <td style="text-align: left;">{{ $producto->options->titulo_es }}</td>
                <td style="">{{ $producto->name }}</td>
                <td style="">{{ $producto->options->marca }}</td>
                <td style="">{{ $producto->options->modelo }}</td>
                <td style="">{{ $producto->options->terminacion }}</td>
                <td>{{ $producto->qty }}</td>
                <td>${{ $producto->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <h4>SubTotal:</h4>
    <p>${{ $subtotal }}</p>
    <h4>Iva:</h4>
    <p>${{ $iva }}</p>

    <h4>Total:</h4>
    <p>${{ $total }}</p>
    <h4>Mensaje:</h4>
    <p>{{ $mensaje }}</p>


    @dd('ver');
    <h4><a href="mailto: {{$emailcliente}}" style="color: black; text-decoration: none;">Responder al cliente</a></h4>
</body>

</html>