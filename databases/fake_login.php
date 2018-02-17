<?php
$query=null;
$user=null;
if (!empty($_POST)) {
  require_once 'config.php';
  $query="SELECT * FROM users WHERE email=:email AND password=:password";
  $prepared=$pdo->prepare($query);
  $prepared->execute([
    'email'=>$_POST['email'],
    'password'=>md5($_POST['password']),
  ]);

  $user=$prepared->fetch(PDO::FETCH_ASSOC);
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
      <h1>Fake-login</h1>
      <a href="index.php">Home</a>

      <form class="" action="fake_login.php" method="post">

        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Save">

      </form>
<div class="">
  <h2>Query</h2>
  <div class="">
<?php
  print_r($query);
 ?>
  </div>
</div>
<div class="">
  <h2>User Data</h2>
<div class="">
  <?php
  print_r($user);
   ?>
</div>

</div>
    </div>
  </body>
</html>
