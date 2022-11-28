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

  
<h3 align="center">Iniciar sesión</h3>
<form align="center" action="acciones/iniciar_sesion.php" method="post">
    Nombre:
    <input type="text" name="nombre">
    <br/><br/>
    Contraseña:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

<h3 align="center">Importar datos</h3>
<form align="center" action="acciones/importar_a_usuarios.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>
  </div>

</body>
</html>
