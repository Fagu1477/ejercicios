<?php include('db.php'); ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>


  
  <body>
    <form action="action.php" method="POST">
      <h1>Inicio de Sesión</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Usuario</strong></label>
        <input type="text" placeholder="Ingrese el usuario" name="nombre" required>
        <label for="psw"><strong>Contraseña</strong></label>
        <input type="password" placeholder="Ingrese una contraseña" name="password" required>
      </div>
      <button type="submit" name="save">Ingresar</button>
      <div class="container" style="background-color: #eee">
        <label style="padding-left: 15px">
        <input type="checkbox"  checked="checked" name="remember"> Remember me
        </label>
        <span class="psw"><a href="#"> Forgot password?</a></span>
      </div>
    </form>
</body>
</html>