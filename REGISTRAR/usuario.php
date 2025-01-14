<?php require_once '../modelos/Db.php' ?>

<!DOCTYPE html>
<html lang="es">
<?php include '../plantillas/head.php' ?>

<body>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/Usu.css">

  <style>
    /* Estilo general del cuerpo de la página */
    body {
      font-family: Arial, sans-serif;
      /* Fuente utilizada para el texto */
      background: linear-gradient(to right, rgb(2, 77, 152), rgb(110, 244, 232), rgb(2, 77, 152));
      /* Color de fondo de la página */
      display: flex;
      /* Usamos flexbox para centrar el contenido */
      justify-content: center;
      /* Centrar horizontalmente */
      align-items: center;
      /* Centrar verticalmente */
      height: 100vh;
      /* Altura del viewport completo */
      margin: 0;
      /* Eliminar márgenes por defecto */
    }

    /* Contenedor principal donde se coloca el formulario */
    .container {
      background-color: white;
      /* Color de fondo del contenedor */
      padding: 30px;
      /* Espaciado interno del contenedor */
      border-radius: 7px;
      /* Bordes redondeados */
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      /* Sombra para dar efecto de profundidad */
      max-width: 450px;
      /* Ancho máximo para el contenedor */
      width: 90%;
      /* Ancho adaptable al tamaño de la pantalla */
    }

    /* Espaciado inferior para los elementos dentro del contenedor */
    .form-content {
      margin-bottom: 15px;
    }

    /* Estilo para el encabezado principal */
    h1 {
      text-align: center;
      /* Centrar el texto del encabezado */
      color: navy;
      /* Color del texto del encabezado */

    }

    /* Estilo para los campos de entrada */
    .input-field {
      margin-bottom: 15px;
      /* Espaciado inferior entre campos de entrada */
    }

    .input-field i {
      margin-right: 10px;
      /* Espacio a la derecha del icono dentro del campo */
      color: rgb(0, 0, 0);
      /* Color para los iconos */
    }

    /* Estilo general para los campos de entrada de texto */
    .field {
      width: calc(100% - 22px);
      /* Ancho ajustado para incluir padding y border */
      padding: 10px;
      /* Espacio interno dentro del campo de entrada */
      border-radius: 5px;
      /* Bordes redondeados en el campo de entrada */
      border: 1px solid #ccc;
      /* Borde gris claro alrededor del campo */
      font-size: 16px;
      /* Tamaño de fuente para el texto dentro del campo */
    }

    /* Estilo para los botones dentro del formulario */
    .btn {
      width: 100%;
      /* Botón ocupa todo el ancho disponible */
      padding: 10px;
      /* Espacio interno del botón */
      background-color: rgb(0, 6, 59);
      /* Color de fondo azul para el botón */
      color: white;
      /* Color del texto en el botón (blanco) */
      border: none;
      /* Sin borde por defecto en el botón */
      border-radius: 5px;
      /* Bordes redondeados en el botón */
      font-size: 16px;
      /* Tamaño de fuente dentro del botón */
      cursor: pointer;
      /* Cambia el cursor al pasar sobre el botón */
    }

    .btn:hover {
      background-color: #0056b3;
      /* Color cambiado al pasar el mouse sobre el botón */
    }

    .center-content {
      text-align: center;
      /* Centrar contenido interno (como textos) en esta clase específica */
    }
  </style>

  <div class="container">
    <div class="form-content">
      <form class=from action="registrarUsuario.php" method="POST">
        <h1>Registro de Usuario</h1>

        <div class="input-greop">
          <div class="input-field" id="nameInput">
            <i class="nav-icon fas fa-id-card">Cédula:</i>
            <input class="field" name="Cedula" placeholder="Cédula" value="" type="text" required> <br />
          </div>

          <div class="input-field" id="nameInput">
            <i class="fa fa-user">Nombres:</i>
            <input class="field" name="Nombres" placeholder="Nombres" value="" type="text" required> <br />
          </div>

          <div class="input-field" id="nameInput">
            <i class="fa fa-user">Apellidos:</i>
            <input class="field" name="Apellidos" placeholder="Apellidos" value="" type="text" required> <br />
          </div>

          <div class="input-field" id="nameInput">
            <i class="nav-icon fas fa-user">Usuario:</i>
            <input class="field" name="Usuario" placeholder="Usuario" value="" type="text" required> <br />
          </div>

          <div class="input-field" id="nameInput">
            <i class="nav-icon fas fa-unlock">Contraseña:</i>
            <input class="field" name="Clave" placeholder="Contraseña" value="" type="password" required> <br />
          </div>

          <div class="input-field" id="nameInput">
            <i class="nav-icon fas fa-crown">Privilegio:</i>
            <select class="field" name="Privilegio" id="" required>
              <option value="A">Administrador</option>
              <option value="U">Usuario Normal</option>
            </select>
          </div>

          <p class="center-content">
            <input type="submit" class="btn btn-info" value="Registrar">
          </p>

          <p class="center-content">
            <a href="../usuario x.php?" class="btn btn-info">Cancelar </a>
          </p>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
