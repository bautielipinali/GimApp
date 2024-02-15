<?php include("../db.php")?>
<link rel="stylesheet" href="../styles/styles2.css">

    <div class ="card text-center">
        <div class="card-body">
            <br><br><br>
            <h2 class="card-title">Eliminar actividad</h2>
            <div class="table-responsive-sm">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Actividad</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM actividades";
                        $result_mascota = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_mascota)){?>
                            <tr>
                                <td><?php echo $row['id_actividad']?></td>
                                <td><?php echo $row['actividad']?></td>
                                <td>
                                    <a href="deleteData.php?id=<?php echo $row['id_actividad']?>">
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