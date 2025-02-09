<?php

if (isset($_POST['Enviar'])) {
    ?>
    <html lang="es-ES">

    <head>
        <title>Datos del usuario</title>
        <meta charset="UTF-8">
        <style>
            body{
                margin: 3vh 2vw 3vh 2vw;
            }
            dl {
                margin-left: 5vw;
            }
            h2 {
                color: red;
            }
        </style>
    </head>

    <body>
        <h1>Datos recibidos correctamente</h1>

        <?php
        $metodoPago = $_POST['metodoPago'];
        $metodoPagoEstilizado = $metodoPago == "payPal" ? "Pay Pal" : "Transferencia bancaria";
        ?>
        <dt>
        <dd>Datos del usuarios</dd>
        <dl>Nombre: <?= $_POST['nombre'] ?></dl>
        <dl>Primer apellido: <?= $_POST['apellido1'] ?></dl>
        <dl>Segundo apellido: <?= $_POST['apellido2'] ?></dl>
        <dl>Email: <?= $_POST['email'] ?></dl>
        <dl>Teléfono: <?= $_POST['telefono'] ?></dl>
        <dl>Altura: <?= $_POST['altura'] ?></dl>
        <dl>Peso: <?= $_POST['peso'] ?></dl>
        <dl>Anchura de pecho: <?= $_POST['anchuraPecho'] ?></dl>
        <dl>Anchura de cintura: <?= $_POST['anchuraCintura'] ?></dl>
        <dl>Anchura de caderas: <?= $_POST['anchuraCaderas'] ?></dl>
        <dl>Foto de cuerpo entero: <?= $_POST['fotoCuerpo'] ?></dl>
        <dl>Dirección de envío: <?= $_POST['direccion'] ?></dl>
        <dl>Comentarios: <?= $_POST['comentarios'] ?></dl>
        <dl>Método de pago: <?= $metodoPagoEstilizado ?></dl>
        </dt>
    </body>

    </html>
    <?php
}