<?php include('../templates/header.html');   ?>
<style>
  <?php include ".././styles/style.css" ?>
</style>
<body>
  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <div id='title'>
  <?php
  require("../config/conexion.php"); #Llama a conexión, crea el objeto PDO y obtiene la variable $db

  
  $query = "SELECT nombre, telefono FROM Artistas ;";
  $result = $db -> prepare($query);
  $result -> execute();
  $dataCollected = $result -> fetchAll(); #Obtiene todos los resultados de la consulta en forma de un arreglo
  ?>

  <table>
    <tr>
      <th>Nombre</th>
      <th>Telefono</th>
      
    </tr>
  <?php
  foreach ($dataCollected as $p) {
    echo "<tr> <td>$p[0]</td> <td>$p[1]</td></tr>";
  }
  ?>
  </table>
  </div>

<?php include('../templates/footer.html'); ?>
