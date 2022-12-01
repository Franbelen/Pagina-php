<?php
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

  <h1 align="center">DCC eventos: Productoras</h1>
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
  <h1 align="center"> Bienvenido  <?php echo $name ?> </h1>
  <h3 align="center"> Eventos aprobados</h3>

  <form align="center" action="consultas/consulta_p_eventos.php" method="post">
  <input type="submit" value="Mostrar lista">
  </form>
  <br>
  <br>

  <h3 align="center"> ¿Quieres saber a quien le ha entregado entradas de cortesía un artista?</h3>
  <form align="center" action="consultas/consulta_entradas_cortesia.php" method="post">
    Nombre
    <input type="text" name="nombre_artista">
    <br/>
    
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>


  <h3 align="center"> ¿Quieres saber sobre el ultimo tour de un artista?</h3>

  <form align="center" action="consultas/consulta_last_tour.php" method="post">
    Nombre Artista:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> ¿Quieres saber paises por donde pasara un tour?</h3>

  <form align="center" action="consultas/consulta_paises_tour.php" method="post">
    Nombre tour:
    <input type="text" name="nombre_tour">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3 align="center">¿Quienes han trabajado con un artista?</h3>
  <form align="center" action="consultas/consulta_productoras.php" method="post">
    Nombre artista:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>


<h3 align="center">¿Donde se ha hospedado el artista?</h3>
<form align="center" action="consultas/consulta_hospedajes.php" method="post">
    Nombre artista:
    <input type="text" name="nombre">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

<h3 align="center">¿Quien es el artista con mayor cantidad de entradas regaladas?</h3>
<form align="center" action="consultas/consulta_mas_entradas.php" method="post">
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>
  </div>

</body>
</html>
