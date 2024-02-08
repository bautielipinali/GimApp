<?php include("../includes/headersHorarios.php")?>
    <div class="container">
        <h2 class="register-title">Registrar horario</h2>
        <form id="animal-form" action="save.php" method="POST">
            <label for="horario">Horario:</label>
            <input type="text" id="horario" name="horario" required placeholder="hs">
            <button type="submit" name="guardar_registro">Registrar</button>
            <?php include("./delete.php")?>
        </form>
    </div>

