<?php include("../db.php")?>

<?php
if(isset($_GET['id'])){
        $id_categoria = $_GET['id'];
        $query = "DELETE FROM categorias WHERE id_categoria = $id_categoria";
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
    window.location = "registerCategoria.php";
    </script>
    

