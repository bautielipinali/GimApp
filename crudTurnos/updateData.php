<?php include("../db.php")?>
<?php include("../includes/headersTurnos.php")?>

<?php
if(isset($_GET['id'])){
    $id_turno = $_GET['id'];
    $query = "SELECT * FROM turnos WHERE id_turno = $id_turno";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombre_prod = $row['nombre'];
        $precio_prod = $row['apellido'];
        $imgURL = $row['id_actividad'];
    }
}

if (isset($_POST['update2'])){
    $id_turno = $_GET['id'];
    $nombre_prod = $_POST['nombre'];
    $precio_prod = $_POST['apellido'];
    $imgURL = $_POST['id_actividad'];

    $query = "UPDATE turnos SET nombre = '$nombre_prod', apellido = '$precio_prod', id_actividad = '$imgURL' WHERE id_turno = $id_turno";
    $result = mysqli_query($conn, $query);

    if (!$result){
        echo "El query de actualizar falló";
    } else {
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
            window.location = "update.php";
        </script>
        <?php 
    }
}
?>
<div class="container">
    <h2 class="register-title">ACTUALIZAR DATOS</h2>
    <form action="updateData.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php print $nombre_prod;?>" class="form-control" placeholder="Actualizar nombre">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="<?php print $precio_prod;?>" class="form-control" placeholder="Actualizar apellido">

        <label for="id_actividad">Actividad:</label>
        <input type="text" name="id_actividad" value="<?php print $imgURL;?>" class="form-control" placeholder="Actualizar actividad">

        <button type="submit" name="update2">Actualizar</button>
    </form>
</div>


   
