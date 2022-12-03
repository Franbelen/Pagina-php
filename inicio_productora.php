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
  <h3 align="center"> Eventos programdaos / en espera / aprobado por artista / rechazados </h3>

  <form align="center" action="consultas/consulta_p_eventos.php" method="post">
  <input type="submit" value="Mostrar lista">
  </form>
  <br>
  <br>

  <h3 align="center"> Filtrar por fechas</h3>
  <form align="center" action="consultas/consulta_p_fecha_eventos.php" method="post">
    Desde
    <input type="text" name="desde">
    <br/>
    Hasta
    <input type="text" name="hasta">
    <br/>
    
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>


  <h3 align="center"> ¿Crear Evento?</h3>

  <form align="center" action="consultas/p_formulario.php" method="post">

    Llena este formulario para proponer un evento
    <input type="submit" value="Formulario">
  </form>
  
  <br>
  <br>
  <br>

  </div>

</body>
</html>
