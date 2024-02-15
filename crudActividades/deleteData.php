<?php include("../db.php"); ?>

<?php

if(isset($_GET['id'])){
    $id_actividad = $_GET['id'];
    echo "ID a eliminar: " . $id_actividad;
    $query = "DELETE FROM actividades WHERE id_actividad = $id_actividad";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("El query para eliminar falló: " . mysqli_error($conn));
    } else {
        ?>
        <script>alert("Registro Eliminado");</script>
        <?php 
    }
}

// Si quisieras redireccionar a index directamente:
?>
<script>
window.location = "registerActividad.php";
</script>