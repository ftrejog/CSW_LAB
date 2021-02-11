<?php
/*
      UNIR
      MATERIA:  COMPUTACION EN EL SERVIDOR WEB
      LABORATORIO:  MANEJO DE DATOS EN EL SERVIDOR E INTERACCION CON EL CLIENTE
                    MEDIANTE UNA APLICACION WEB
      ALUMNO:   FELIPE TREJO GARCIA
      PROFESOR: MAESTRO OCTAVIO AGUIRRE LOZANO

*/
session_start();
?>

<html>
  <head>
    <title>Inicio de sesion</title>
  </head>
  <body>
    <form method="post" action="_controladores/indexController.php" name="signin-form">
      <div class="form-element">
        <label>Usuario</label>
        <input type="text" name="usuario" pattern="[a-zA-Z0-9]+" required />
      </div>
      <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" maxlength="30" required />
      </div>
      <button type="submit" name="login" value="login">Ingresar</button>
      <div>
        <p>
          <?php if (isset($_SESSION['autherr'])) echo $_SESSION['autherr']; ?>
        </p>
      </div>
    </form>
  </body>
</html>
