<?php include("../db.php"); ?>

<?php
if(isset($_GET['id'])){
    $id_horario = $_GET['id'];
    $query = "DELETE FROM horarios WHERE id_horario = $id_horario";
    $result = mysqli_query($conn, $query);
    if(!$result)
    {
        die("El query para eliminar falló: " . mysqli_error($conn));
    }
    else{
        ?>
        <script>alert("Registro Eliminado");</script>
        <?php 
    }
}
// Si quisieras redireccionar a index directamente:
?>
<script>
window.location = "registerHorario.php";
</script>
