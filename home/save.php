<?php include("../db.php")?>
<?php 

if (isset($_POST['guardar_turno'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $actividad = $_POST['actividad'];
    $id_horario= $_POST['id_horario'];

}

    $query = "INSERT INTO Turnos(nombre, apellido, actividad, id_horario) VALUES ('$nombre','$apellido','$actividad','$id_horario')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Registro Guardado");</script>
        <?php 
        
    }

    ?>
    <script>
    window.location = "registerProducto.php";
    </script>


