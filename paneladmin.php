<?php include("./db.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gym bomba</title>
    <link rel="stylesheet" href="styles/panelAdmin.css">
</head>
<body>
<div class="container">
        <nav>
        <h2 class="card-title">Panel de Control</h2>
            <ul>
                <li><a href="./crudTurnos/registerProducto.php">Turnos</a></li>
                <li><a href="./crudUsuario/registerUsuario.php">Usuarios</a></li>
                <li><a href="./crudEmpleados/registerVeterinario.php">Empleados</a></li>
                <li><a href="./crudHorarios/registerHorario.php">Horarios</a></li>

                <li><a href="salir.php">Cerrar sesión</a></li>
            </ul>
        </nav>
    </div>

    <h2 class="titulo1">Turnos agendados</h2>
    <table id="table">
        <thead>
            <tr>
                <th>ID Turno</th>
                <th>ID horario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Actividad</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query_turnos = "SELECT * FROM turnos";

                $result_turnos = mysqli_query($conn, $query_turnos);

                while ($row = mysqli_fetch_array($result_turnos)) { ?>
                    <tr>
                        <td><?php echo $row['id_turno']; ?></td>
                        <td><?php echo $row['id_horario']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['actividad']; ?></td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>