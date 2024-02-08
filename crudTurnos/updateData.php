<?php include("../db.php")?>
<?php include("../includes/headersTurnosphp")?>

<?php
if(isset($_GET['id'])){
$id_prod = $_GET['id'];
$query = "SELECT * FROM turnos WHERE id_turno = $id_turno";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombre_prod = $row['nombre'];
    $precio_prod = $row['apellido'];
    $imgURL = $row['actividad'];
    }
}
if (isset($_POST['update2'])){
    $id_prod = $_GET['id'];
    $nombre_prod = $_POST['nombre'];
    $precio_prod = $_POST['apellido']; // Variable correcta para especie
    $imgURL = $_POST['actividad']; // Variable para raza

    $query = "UPDATE Turnos SET nombre = '$nombre', apellido = '$apellido', actividad = '$actividad' WHERE id_turno = $id_turno";
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
            <input type="text" name="nombre" value="<?php print $nombre;?>" class = "form-control" placeholder="Actualizar nombre">

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" value="<?php print $apellido;?>" class = "form-control" placeholder="Actualizar apellido">

            <label for="actividad">Actividad:</label>
             <input type="text" name="actividad" value="<?php print $actividad;?>" class="form-control" placeholder="Actualizar actividad">

            <button type="submit" name="update2">Actualizar</button>
        </form>
    </div>
    

   
