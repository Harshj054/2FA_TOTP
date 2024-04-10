<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Login </title>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


  <link rel="stylesheet" href="css/style.css">
  
</head>

<body style="background-image: url('login_BG.png'); background-size: cover;">

  <center style="padding-top: 180px;">
    <div class="form_css">
      <h2>ADMIN LOGIN</h2>
      <hr><hr><br><br>
      <form action="checklogin.php" method="POST">
        <label for="username">USERNAME : </label>
        <input type="email" title="username" placeholder="username" name="email" /><br><br><br>
        <label for="password">PASSWORD : </label>
        <input type="password" title="username" placeholder="password" name="password" /><br><br><br>
        <input type="submit" class="button" name="login" value="Login" class="btn btn-success">
      </form>
    </div>
  </center>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

</body>

</html>