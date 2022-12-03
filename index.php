<?php session_start() ?>

<?php include('templates/header.html');   ?>
<style>
  <?php include "./styles/style.css" ?>
</style>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>

  <h1 align="center">DCC Eventos</h1>
  <div id='title2'>
  <p style="text-align:center;">Aquí podrás encontrar información sobre artistas, productoras, tours y eventos.</p>
  </div>
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

<div>
<?php if(empty($_SESSION['user_name']))?>

<h3 align="center">Iniciar sesión</h3>

  <form align="center" action="login.php" method="POST">
  
  <input type="text" name= 'user_name'>
  <br/><br/>
  <input type="text" name='password'>
  <br/><br/>
  <button type="submit">Login</button>
</form>


</div>

<div>
<h3 align= "center" >Importar datos</h3>
<form align= "center" action="users/importar_nuevos.php" method="post">
    <input type="submit" value="Importar">
  </form>
  <br>
  <br>
  <br>
</div>

<h3 align="center">Ver usuarios de la pagina (sin contraseña)</h3>

  <form action="users/usuarios_pagina.php" method="POST">
  <button align="center" type="submit">Buscar</button>

</form>


<h3 align="center">Ver usuarios de la pagina (con contraseña actual)</h3>

  <form action="usuarios_pagina_con.php" method="POST">
  <button align="center" type="submit">Buscar</button>

</form>