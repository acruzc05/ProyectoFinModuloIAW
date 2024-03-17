<?php
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
    
  ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <div id="formulario" style="font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; margin: 0; margin-top: 150px;">
    <form action="index.php?controller=UsuController&action=validacioniniciosesion" method="POST" style="background-color: #fff; border-radius: 15px; padding: 40px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); width: 400px; display: flex; flex-direction: column;">
      <h2 style="text-align: center; margin-bottom: 30px; font-size: 28px;">Inicio de Sesión</h2>
      <label for="usuario">Nombre de usuario:</label>
      <input placeholder="Usuario" type="text" id="usuario" name="usuario" style="padding: 20px; margin-bottom: 25px; border: 1px solid #ccc; border-radius: 10px; font-size: 20px;">
      <?php
      if(isset($data) && isset($data['usuario'])){
        echo "<div class='alert alert-danger'>".$data['usuario']."</div>";
      }
      ?>
      <label for="contrasena" style="margin-top: 6%;">Contraseña:</label>
      <input placeholder="Contraseña" type="password" id="contrasena" name="contrasena" style="padding: 20px; margin-bottom: 25px; border: 1px solid #ccc; border-radius: 10px; font-size: 20px;">
      <?php
      if(isset($data) && isset($data['contrasena'])){
        echo "<div class='alert alert-danger'>".$data['contrasena']."</div>";
      }
      if(isset($data) && isset($data['general'])){
        echo "<div class='alert alert-danger'>".$data['general']."</div>";
      }
      ?>
      <div style="text-align: center;">
        <input type="submit" value="Iniciar Sesión" name="iniciarsesion" style="background-color: #437F97; color: white; padding: 20px; border: none; border-radius: 10px; cursor: pointer; font-size: 20px;"><br><br>
      </div>
    </form>
  </div>
</body>
</html>
