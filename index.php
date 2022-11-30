<?php session_start() ?>

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
  <br>
  <br>

<div>
<?php if(empty($_SESSION['user_name']))?>

<h3 align="center">Iniciar sesión</h3>

  <form align="center" action="login.php" method="POST">
  
  <input type="text" name= 'user_name'>
  <br/><br/>
  <input type="password" name='password'>
  <br/><br/>
  <button type="submit" name="login">Login</button>
</form>

<?php ?>
</div>

<h3 align= "center" >Importar datos</h3>
<form align= "center" action="users/importar_a_usuarios.php" method="post">
    <input type="submit" value="Importar">
  </form>
  <br>
  <br>
  <br>
  </div>

</body>
</html>
