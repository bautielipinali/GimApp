<?php
include("../db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GYM BOMBA</title>
    <link rel="stylesheet" href="../styles/styleHome.css">
</head>
<body>
    
<nav class="navbar">
    <div class="logo"><h1>GYM BOMBA</h1></div>
    <ul class="menu">
        <li><a href="../salir.php">cerrar sesión</a></li>
    </ul>
</nav>
<?php?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gym bomba</title>
    <link rel="stylesheet" href="../styles/stylesHeaderMacota.css">
</head>
<body>
 <?php
$sql = "SELECT * FROM turnos";
$result = $conn->query($sql);

$sql_prod = "SELECT * FROM horarios";
$result_prod = $conn->query($sql_prod)
?>
    <div class="container">
        <h2 class="register-title">Registrar un Turno</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Nombre">

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required placeholder="Apellido">

            <label for="actividad">Actividad:</label>
            <input type="text" id="actividad" name="imgURL" required placeholder="Actividad">

            <label for="id_horario">Horario:</label>
            <select id="id_horario" name="id_horario">
                <?php
                 while($row = $result_prod->fetch_assoc()) {
                 echo "<option value='" . $row['id_horario'] . "'> " . $row['horario'] . " </option>";
                 }
                 ?>
            </select>


            <button type="submit" name="guardar_turno">Registrar</button>
        </form>
    </div>

<footer>
    <small>GYM BOMBA 2023</small>
</footer>

</body>
 </html>
