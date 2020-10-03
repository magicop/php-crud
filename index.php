<?php 
require_once 'includes/header.php';
require_once 'includes/helpers.php';
require_once 'includes/conexion.php';
?>

    
    <div class="container">

      <?php if(isset($_SESSION['usuario'])): ?>
        <div class="alert alert-success">
          <h3>Bienvenido, <?=$_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos'];?></h3>

          <!-- Botones -->
          <a href="mis-datos.php" class="btn btn-primary">Mis datos</a>
          <a href="logout.php" class="btn btn-primary">Cerrar sesión</a>
        </div>
      <?php endif; ?>

      <!-- Form Login-->

      <h2>Login</h2>

      <?php if(isset($_SESSION['error_login'])): ?>
          <div class="alert alert-danger">
            <?=$_SESSION['error_login'];?>
          </div>
      <?php endif; ?>

      <form method="POST" action="login.php">
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" name="email" placeholder="Escribe tu email">

        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Escribe tu password">
        </div>
        <button type="submit" class="btn btn-primary">Conectar</button>
      </form>

      <!-- Form Login-->

      <br>

      <h2>Registro</h2>

      <!-- Mostrar errores -->
      <?php if(isset($_SESSION['completado'])): ?>
          <div class="alert alert-success">
            <?=$_SESSION['completado']?>
          </div>
        }
      <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alert alert-danger">
          <?=$_SESSION['errores']['general']?>
        </div>
      <?php endif; ?>

      <form method="POST" action="registro.php">
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

        </div>
        <div class="form-group">
          <label>Apellidos</label>
          <input type="text" class="form-control" name="apellidos" placeholder="Escribe tus apellidos">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" placeholder="Escribe tu email">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" class="form-control" name="password" placeholder="Escribe tu contraseña">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'password') : ''; ?>
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
      </form>

      <!-- Fin Form Registro -->

      <?php borrarErrores(); ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>