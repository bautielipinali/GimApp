<?php include("../includes/headersActividades.php")?>
    <div class="container">
        <h2 class="register-title">Registrar actividad</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="actividad">Actividad:</label>
            <input type="text" id="actividad" name="actividad" required placeholder="actividad">
            <button type="submit" name="guardar_registro">Registrar</button>
            <?php include("./delete.php")?>
        </form>
    </div>