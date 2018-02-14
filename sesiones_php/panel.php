<?php
  session_id("carlos");
  session_start();
  session_name();


  $varsesion=$_SESSION['usuario'];

  if($varsesion==null||$varsesion=''){
    echo 'Usted no tiene autorizacion';
    header("Location:index.php");
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Panel de administracion</h1>
<h2>Bienvenido: <?php echo $_SESSION['usuario']; ?></h2>
<h2>Id de la sesion: <?php echo session_id(); ?></h2>
<h2>Estado de la sesio: <?php echo session_status(); ?></h2>
<a href="cerrar_sesion.php">Cerrar sesion</a>
<h3>LIberando las variables de sesion <?php session_unset(); ?> </h3>
<h2>Bienvenido: <?php echo $_SESSION['usuario']; ?></h2>
<!-- Error ya que libere las variables de sesion -->
  </body>
</html>
