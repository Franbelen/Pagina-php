<?php
  #para usar name sesion#
  session_start();
  $name = $_SESSION['name'];
?>

<?php include('templates/header.html');   ?>
<style>
  <?php include "./styles/style.css" ?>
</style>

<head>

  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <div id='title'>

  <h1 align="center">DCC eventos: Artistas</h1>
  <div id='title2'><p style="text-align:center;">Aquí podrás encontrar información.</p>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</head>

<body>
  <h1 align="center"> Bienvenido  <?php echo $name ?> a la pagina de artistas</h1>

  <h3 align="center"> Información general</h3>
  <form align="center" action="consultas/consulta_a_all.php" method="post">
    
    <input type="submit" value="Buscar">
  </form>

</body>
</html>
