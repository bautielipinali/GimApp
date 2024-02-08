<?php include("../db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $horario = $_POST['horario'];
}
    $query = "INSERT INTO horarios (horario) VALUES ('$horario')";
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
    window.location = "registerHorario.php";
    </script>
