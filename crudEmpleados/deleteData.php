<?php include("../db.php")?>

<?php
if(isset($_GET['id'])){
        $id_empleado = $_GET['id'];
        $query = "DELETE FROM empleados WHERE id_empleado = $id_empleado";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
        else{
            ?>
            <script>alert("Registro Eliminado");</script>
            <?php 
        }
    }
    //si quisiera redireccionar a index directamente: ?>
    <script>
    window.location = "delete.php";
    </script>
    

