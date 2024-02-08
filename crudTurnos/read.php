<?php include("../db.php")?>
<?php include("../includes/headersTurnos.php")?>

<link rel="stylesheet" href="../styles/styles2.css">

    <div class ="card text-center">
        <div class="card-body">
            <h1 class="card-title">LEER DATOS</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table-fill">
                    <thead>
                        <tr>
                            <th class="text-left">Nombre</th>
                            <th class="text-left">Apellido</th>
                            <th class="text-left">Actividad</th>
                        </tr>
                    </thead>
                    <tbody class="table-hover">
                        <?php
                        $query = "SELECT * FROM turnos";
                        $result_productos = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_productos)){?>
                            <tr>
                                <td class="text-left"><?php echo $row['nombre']?></td>
                                <td class="text-left"><?php echo $row['apellido']?></td>
                                <td class="text-left"><?php echo $row['actividad']?></td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 