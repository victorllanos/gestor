<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>login</title>
  <link rel="stylesheet" type="text/css" href="css\login.css">
  <link href="librerias\boostrap4\bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="librerias\boostrap4\popper.min.js"></script>
<script src="librerias\boostrap4\bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img\logo.jpg" id="icon" alt="User Icon" />
      <h1>Gestor de archivos</h1>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="registro.php">Registrarse</a>
    </div>

  </div>
</div>
</body>
</html>