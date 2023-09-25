<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GalaxyPvP - Inicio</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <header>
        GalaxyPvP
    </header>
    <br>
    <br>
    <br>
    <br>
    <?php
    
    require('configuracion.php');
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conexion, $consulta);
    $fila = mysqli_fetch_assoc($resultado);
    echo "<center>IP: " . $fila['ip'] . " Puerto: " . $fila['puerto'] . "</center>";
    session_start();
    if(isset($_SESSION['admin'])){
        echo "<br><center><a href='panel.php'>Panel</a></center>";
    } else {
        echo "<br><center><a href='login.php'>Iniciar Sesion</a></center>";
    }
    
    ?>
</body>
</html>