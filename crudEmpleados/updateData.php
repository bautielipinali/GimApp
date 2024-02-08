<?php include("../db.php")?>
<?php include("../includes/headersEmpleados.php")?>

<?php
if(isset($_GET['id'])){
$id_empleado = $_GET['id'];
$query = "SELECT * FROM empleados WHERE id_empleado = $id_empleado";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $email = $row['email'];
    $dni = $row['dni'];
    $cargo = $row['cargo'];
    }
}
if (isset($_POST['update2'])){
    $id_empleado = $_GET['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $cargo = $_POST['cargo'];

    $query = "UPDATE empleados SET nombre = '$nombre', email = '$email', dni = '$dni', cargo = '$cargo' WHERE id_empleado = $id_empleado";
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
            <label for="nombre">Empleado/a:</label>
            <input type="text" name="nombre" value="<?php print $nombre;?>" class = "form-control" placeholder="Actualizar nombre">

            <label for="email">Email:</label>
            <input type="text" name="email" value="<?php print $email;?>" class = "form-control" placeholder="Actualizar email>">

            <label for="dni">DNI:</label>
            <input type="text" name="dni" value="<?php print $dni;?>" class = "form-control" placeholder="Actualizar DNI">

            <label for="cargo">Cargo:</label>
            <input type="text" name="cargo" value="<?php print $cargo;?>" class="form-control" placeholder="Actualizar cargo">

            <button type="submit" name="update2">Actualizar</button>
        </form>
    </div>
    