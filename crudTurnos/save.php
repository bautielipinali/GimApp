<?php include("../db.php")?>
<?php 

if (isset($_POST['guardar_turno'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $actividad = $_POST['actividad'];
    $id_horario= $_POST['id_horario'];

    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO Turnos(nombre, apellido, actividad, id_horario) VALUES ('$nombre','$apellido','$actividad','$id_horario')";
	//die( $query);
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Registro Guardado");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "registerProducto.php";
    </script>


