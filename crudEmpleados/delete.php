<?php include("../db.php")?>
<?php include("../includes/headersEmpleados.php")?>
<link rel="stylesheet" href="../styles/styles2.css">

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">ELIMINAR DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>DNI</th>
                            <th>Cargo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM empleados";
                        $result_productos = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_productos)){?>
                            <tr>
                                <td><?php echo $row['nombre']?></td>
                                <td><?php echo $row['email']?></td>
                                <td><?php echo $row['dni']?></td>
                                <td><?php echo $row['cargo']?></td>
                                <td>
                                    <a href="deleteData.php?id=<?php echo $row['id_empleado']?>">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 