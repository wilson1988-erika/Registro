<?php include("dbr.php") ?>

<?php include("incluye/header.php") ?>

<div class="container p-4">

  <div class="row">
    <div class="col-md-4">

      <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
          <?= $_SESSION['message'] ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      <?php session_unset();
      } ?>

      <h1>REGISTRESE</h1>

      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required autofocus >
          </div>
          <div class="form-group">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido" required autofocus>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Correo electronico" required autofocus>
          </div>
          <div class="form-group">
            <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" required autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="departamento" class="form-control" placeholder="Departamento" required autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="ciudad" class="form-control" placeholder="Ciudad " required autofocus>
          </div>
          <div class="form-group">
            <input type="text" name="telefono" class="form-control" placeholder="Telefono " required autofocus>
          </div>
          <input type="submit" class="btn btn-success btn-block" name="guardar_registro" value="Guardar Registro">
        </form>
      </div>
    </div>
  </div>
    </div>
    <?php
         $query = "SELECT * FROM registro";

         $result = mysqli_query($conn, $query);?>
         
<?php include("incluye/footer.php") ?>