<?php include("../includes/headersEmpleados.php")?>
    <div class="container">
        <h2 class="register-title">Registrar Empleado</h2>
        <form id="animal-form" action="save.php" method="POST">

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required placeholder="Nombre">

            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required placeholder="E-mail">

            <label for="dni">DNI:</label>
            <input type="text" id="dni" name="dni" required placeholder="Dni">

            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required placeholder="Cargo">

            <button type="submit" name="guardar_registro">Registrar</button>
        </form>
    </div>

