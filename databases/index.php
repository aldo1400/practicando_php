<?php
$dbHost='localhost';
$dbName='cursophp';
$dbUser='root';
$dbPass='';

try {
  $pdo=new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
  echo $e->getMessage();
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Databases</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
      <h1>Databases</h1>
      <ul>
        <li><a href="#">Listar usuarios</a></li>
        <li><a href="#">Agregar usuarios</a></li>
      </ul>
    </div>
  </body>
</html>