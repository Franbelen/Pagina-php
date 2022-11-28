<?php include('templates/header.html');   ?>
<style>
  <?php include "./styles/style.css" ?>
</style>

<body>

  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <div id='title'>

  <h1 align="center">DCC Eventos</h1>
  <div id='title2'><p style="text-align:center;">Aquí podrás encontrar información sobre artistas, productoras, tours y eventos.</p>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

<?php
// Si no está asignada la variable mostrar form para ingresar
if(empty($_SESSION['username']))?>
<div>
  <form method="POST">
  <input type="text" name="username">
  <input type="password" name="password">
  <button type="submit" name="login">Login</button>
</form>
</div>
<?php?>

<h3 align="center">Iniciar sesión</h3>
<form align="center" action="acciones/iniciar_sesion.php" method="post">
    Nombre:
    <input type="text" name="nombre">
    <br/><br/>
    Contraseña:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Login">
  </form>
  <br>
  <br>
  <br>

<h3 align= "center" >Importar datos</h3>
<form align= "center" action="acciones/importar_a_usuarios.php" method="post">
    <input type="submit" value="Importar">
  </form>
  <br>
  <br>
  <br>
  </div>

</body>
</html>
