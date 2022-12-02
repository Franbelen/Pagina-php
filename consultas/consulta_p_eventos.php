<?php include('../templates/header.html');   ?>
<?php
  session_start();
  $name = $_SESSION['name'];
?>
<body>
<?php
  #hago la consulta aquí mismo para que se muestren los eventos apenas aparezca la página
  #require("../config/conexion.php");

  $query = 

  "SELECT DISTINCT e.nombre, e.fecha_inicio
  FROM Evento as e, Presentacion as p
  ;";
  #WHERE LOWER(e.nombre_productora) LIKE LOWER (' %$nombre productora%')
  #ORDER BY p.fecha_inicio 
  echo $db;
  

	$result = $db -> prepare($query);
	$result -> execute();
	$eventos = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Nombre_evento</th>
      <th>fecha_inicio</th>
    </tr>
  
      <?php
        foreach ($eventos as $e) {
          echo "<tr><td>$e[0]</td><td>$e[1]</td></tr>";
      }
      ?>
      
  </table>



<?php include('../templates/footer.html'); ?>
