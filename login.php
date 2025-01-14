<!DOCTYPE html> <!--HTML5-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Sistema Automatizado </title>
    <link rel="stylesheet" href="css/longin.css">

</head>


<body>
    <div class="container-form">
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <img src="imagenes/logo.png" alt="Imagen">

               

            </div>
        </div>

        <div class="form-information">
            <div class="form-information-childs">
                <h1>Iniciar sesión</h1>
                <!--iconos-->
                <div class="iconos">
                    <i class='bx bxl-google'></i>
                    <i class='bx bx-chevrons-down'></i>
                    <i class='bx bxs-school'></i>
                </div>
                
                <p>U.E.B."Silvestre A. Bravo L."</p>

                <form class="form" method="POST" action="./app/UserController.php">
                    <!--icono y su respetivo impu-->
                    <label>
                        <i class="bx bx-user-circle"></i>
                        <input type="text" name="usuario" placeholder="Usuario" required>
                    </label>
                    <label>
                        <i class='bx bx-lock'></i>
                        <input type="password" name="password" placeholder="Contraseña" required>
                    </label>

                    <input type="submit" value="Ingresar">
                    
                </form>

            </div>
        </div>
    </div>
</body>

</html>

<?php




?>