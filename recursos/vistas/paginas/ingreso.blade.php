<x-plantillas.ingreso>
  <div class="container-form">
    <div class="information">
      <div class="info-childs">
        <h2>Bienvenido</h2>
        <img src="imagenes/logo.png" width="100%" />
      </div>
    </div>

    <div class="form-information">
      <div class="form-information-childs">
        <h1>Iniciar sesión</h1>
        {{-- <x-ingreso-iconos /> --}}
        <p>U.E.B."Silvestre A. Bravo L."</p>

        <form class="form" method="post">
          <label>
            <i class="bx bx-user-circle"></i>
            <input name="usuario" placeholder="Usuario" required />
          </label>

          <label>
            <i class="bx bx-lock"></i>
            <input
              type="password"
              name="password"
              placeholder="Contraseña"
              required />
          </label>

          <input type="submit" value="Ingresar" />
        </form>
      </div>
    </div>
  </div>
</x-plantillas.ingreso>
