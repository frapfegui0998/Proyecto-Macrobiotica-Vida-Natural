<div>
    <h1 style="color: #4267B2; font-size: 24px; font-weight: bold;">Solicitud de productos</h1>
    <p>La persona que ha realizado la solicitud: {{ $nombre }} {{ $apellido }}!</p>

    <p>Motivo de la solicitud: <strong>{{ $motivo }}</strong></p>

    <p>A continuación, encontrarás los detalles de los productos que ha solicitado:</p>

    <p>{{ $mensaje }}</p>

    <p>Atentamente,<br>
        {{ config('app.name') }}</p>
</div>
