<?php 
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/helpers.php'; ?>

<div class="container">

	<!-- Mostrar errores -->
      <?php if(isset($_SESSION['completado'])): ?>
          <div class="alert alert-success">
            <?=$_SESSION['completado']?>
          </div>
      <?php elseif(isset($_SESSION['errores']['general'])): ?>
        <div class="alert alert-danger">
          <?=$_SESSION['errores']['general']?>
        </div>
      <?php endif; ?>

      <form method="POST" action="actualizar-usuario.php">
        <div class="form-group">
          <label>Nombre</label>
          <input type="text" class="form-control" name="nombre" value="<?=$_SESSION['usuario']['nombre'];?>">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'nombre') : ''; ?>

        </div>
        <div class="form-group">
          <label>Apellidos</label>
          <input type="text" class="form-control" name="apellidos" value="<?=$_SESSION['usuario']['apellidos'];?>">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'apellidos') : ''; ?>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="<?=$_SESSION['usuario']['email'];?>">
          <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'email') : ''; ?>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>

      <!-- Fin Form Registro -->

      <?php borrarErrores(); ?>

</div>

<?php require_once 'includes/footer.php'; ?>