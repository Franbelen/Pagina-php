<?php include('../templates/header.html')?>

<head>

  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <div id='title'>

  <h1 align="center">Importar datos</h1>
  <div id='title2'><p style="text-align:center;">Aquí podrás modificar y ver usuarios.</p>
  </div>
</head>  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

<body>
<div>
<h3 align="center">Ver usuarios de la pagina</h3>

  <form action="usuarios_pagina.php" method="POST">
  <button align="center" type="submit">Buscar</button>

</form>
</div>
<h3 align="center">Importar nuevos artistas y productoras</h3>

  <form action="importar.php" method="POST">
  <button align="center" type="submit">Importar</button>

</form>

<h3 align="center"> Eliminar usuarios</h3>

  <form action="eliminar.php" method="POST">
  <button align="center" type="submit">Eliminar</button>
  
</form>
</body>

</html>
