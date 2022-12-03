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
  <h3 align="center"> ¿Quieres saber los nombres y telefonos de todos nuestros artistas?</h3>

<form align="center" action="consultas_extra/consulta_all.php" method="post">
<input type="submit" value="Mostrar lista">
</form>
<br>
<br>

<h3 align="center"> Entradas cortesia entregadas</h3>
<form align="center" action="consultas_extra/consulta_entradas_cortesia.php" method="post">
  
  <input type="submit" value="Buscar">
</form>

<br>
<br>
<br>


<h3 align="center"> Tours realizados </h3>

<form align="center" action="consultas_extra/consulta_last_tour.php" method="post">
  <input type="submit" value="Buscar">
</form>

<br>
<br>
<br>


<h3 align="center"> Productoras con las que has trabajado </h3>
<form align="center" action="consultas_extra/consulta_productoras.php" method="post">
  <input type="submit" value="Buscar">
</form>
<br>
<br>
<br>


<h3 align="center"> Hospedajes </h3>
<form align="center" action="consultas_extra/consulta_hospedajes.php" method="post">
  Nombre artista:
  <input type="text" name="nombre">
  <br/><br/>
  <input type="submit" value="Buscar">
</form>
<br>
<br>
<br>


</body>
</html>

