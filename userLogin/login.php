<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styleLogin.css">
    <title>Document</title>
</head>
<body>
    <div class="section">
    <div class="box1">
        <img class="img" src="https://images.unsplash.com/photo-1580261450046-d0a30080dc9b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8Z3ltJTIwYmFja2dyb3VuZHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80" alt="">
        </div>
        <div class="box2">
            <h2>Iniciar Sesión</h2>
            <form action="userValidator.php" method="post">
                <!-- Username -->
                <label for="name">Email</label><br>
                <input id="labe1" type="email" name="email"> <br>
                <!-- Password -->
                <label for="username">Contraseña</label> <br>
                <input id="labe1" type="password" name="clave"> <br> 
                <input id="input__1" type="submit" value="Iniciar Sesión">
                <br><br>
            </form>       

        </div>

    </div>
    
</body>
</html>