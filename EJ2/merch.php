<?php
require_once 'config.php';
include 'header.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $site_title; ?></title>
    <style>
        .date{
            text-align: center;
            background-color: gray;
            border: 5px solid black;
            padding: 100px;
        }
        .comprar{
            width: 300px;
        }
    </style>
</head>
<body>
    <p>Compra la m</p>
    <div class="date">
        <p class="info"> Fecha: <?php echo $fecha; ?></p>
        <p class="info"> Hora: <span id="time"></span></p>
        <img class="comprar" src="multimedia/buy.png">
    </div>

<script>
    function actualizar(){
        const now = new Date();
        const time = now.toLocaleTimeString();
        document.getElementById("time").textContent = time;
    }
    setInterval(actualizar, 1000);
    actualizar();
</script>
</body>
</html>

<?php
include 'footer.php';
?>
