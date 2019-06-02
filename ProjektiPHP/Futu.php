<?php
include_once ('login.php');
if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Futu-Revista Drita</title>
    <link rel="stylesheet" href="Futja.css">
  </head>
  <body>
<form class="login-box" action="" method="POST">
    <h1>Ky&ccedil;u</h1>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Emri i p&euml;doruesit" name="emri" required>
  </div>
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Fjal&euml;kalimi" name="fjalekalimi" required>
  </div>

  <input type="submit" class="btn" value="Futu" name="submit">
    <p style="color: red;text-align: center;"><?php echo $error; ?></p>
    <a href="Regjistrohu.php">Ende nuk posedoni nj&euml; llogari?</a>
</form>
  </body>
</html>
