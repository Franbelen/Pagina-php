<?php include('./templates/header.html');   ?>


<head>

  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <div id='title'>

  <h1 align="center">Importar datos</h1>
  <div id='title2'><p style="text-align:center;">Aquí podrás importar los datos de ambas bases para agregarlos a usuarios.</p>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</head>

<h3 align="center">Ver usuarios de la pagina</h3>

  <form align="center" action="ver_usuarios.php" method="POST">
  <button type="submit" name="Buscaruwu">Buscar</button>

</form>

<h3 align="center">Importar nuevos artistas y ptoductoras</h3>

  <form align="center" action="importar.php" method="POST">
  <button type="submit" name="Importar"></button>

</form>

<h3 align="center"> Eliminar usuarios</h3>

    <form align="center" action="eliminar.php" method="POST">
  <button type="submit" >Eliminar</button>
  
</form>

</html>
