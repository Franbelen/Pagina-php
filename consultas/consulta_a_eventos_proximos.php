<?php
  session_start();
  $name = $_SESSION['name'];
?>
<?php include('../templates/header.html');   ?>
<body>
<?php
  #hago la consulta aquí mismo para que se muestren los eventos apenas aparezca la página
  require("../config/conexion.php");
  $fech_desde = $_POST["desde"];
  $fech_hasta = $_POST["hasta"];

  $query = 
  "SELECT DISTINCT e.nombre, e.fecha_inicio
  FROM Evento as e, Presentacion as p
  WHERE LOWER(e.nombre_productora) LIKE LOWER (' %$nombre productora%')
  AND p.fecha_inicio > (' %$fech_desde%')
  AND p.fecha_termino < (' %$fech_hasta%')
  ORDER BY p.fecha_inicio 
  ;";
  


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
