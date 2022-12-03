
<?php
  session_start();
  $name = $_SESSION['name'];
?>
<?php include('../templates/header.html');   ?>
<body>
<?php
  #hago la consulta aquí mismo para que se muestren los eventos apenas aparezca la página
  require("../config/conexion.php");
  $name = str_replace("_"," ", $name);
  $query = 

  "SELECT DISTINCT e.nombre, p.fecha_inicio 
  FROM Evento as e, Presentacion as p
  WHERE e.Productora ILIKE  '$name'
  ORDER BY p.fecha_inicio 
  AND p.evento = e.nombre
  
 
  ;";





 # 

	$result = $db2 -> prepare($query);
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
