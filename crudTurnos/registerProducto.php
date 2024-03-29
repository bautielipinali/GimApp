<?php include("../includes/headersTurnos.php")?>
<?php
include("../db.php");

$sql = "SELECT * FROM turnos";
$result = $conn->query($sql);

$sql_prod = "SELECT * FROM horarios";
$result_prod = $conn->query($sql_prod);

$sql_act = "SELECT * FROM actividades";
$result_act = $conn->query($sql_act);

?>
    <div class="container">
        <h2 class="register-title">Registrar un Turno</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Nombre">

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required placeholder="Apellido">

            <label for="id_actividad">Actividad:</label>
            <select id="id_actividad" name="id_actividad">
                <?php
                 while($row = $result_act->fetch_assoc()) {
                 echo "<option value='" . $row['id_actividad'] . "'> " . $row['actividad'] . " </option>";
                 }
                 ?>
            </select>

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


