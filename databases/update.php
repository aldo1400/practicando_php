
<?php
include_once 'config.php';
$result=false;
if(!EMPTY($_POST))
{
  $id=$_POST['id'];
  $newName=$_POST['name'];
  $newEmail=$_POST['email'];
  $sql="UPDATE users SET name=:name,email=:email WHERE id=:id";
  $query=$pdo->prepare($sql);
  $result=$query->execute([
    'id'=>$id,
    'name'=>$newName,
    'email'=>$newEmail,
  ]);
  $nameValue=$newName;
  $emailValue=$newEmail;

}
else {

  $id=$_GET['id'];
  $sql="SELECT * FROM users WHERE id=:id";
  $query=$pdo->prepare($sql);
  $query->execute([
    'id'=>$id,
  ]);

  $row=$query->fetch(PDO::FETCH_ASSOC);
  $nameValue=$row['name'];
  $emailValue=$row['email'];
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
      <h1>Update User</h1>
      <a href="list.php">Back</a>

      <?php
        if($result==true){
          echo '<div class="alert alert-success">Sucess!!!</div>';
        }
       ?>

      <form class="" action="update.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name"  id="name" value="<?php echo $nameValue; ?>">
        <br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $emailValue; ?>">
        <br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="Update">
      </form>
    </div>
  </body>
</html>
