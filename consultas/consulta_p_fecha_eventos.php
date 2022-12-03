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
  "SELECT DISTINCT e.nombre, p.fecha_inicio 
  FROM Evento as e, Presentacion as p
  WHERE e.Productora ILIKE  '$name'
  AND p.Evento = e.nombre
  AND p.fecha_inicio > cast($fech_desde as date)
  AND p.fecha_termino < cast($fech_hasta as date)
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
