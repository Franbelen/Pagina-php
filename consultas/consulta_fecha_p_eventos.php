<?php include('../templates/header.html');   ?>
<?php
  session_start();
  $name = $_SESSION['name'];
?>
<body>
<?php
  #hago la consulta aquí mismo para que se muestren los eventos apenas aparezca la página
  require("../config/conexion.php");
  $fech_desde = $_POST["desde"];
  $fech_hasta = $_POST["hasta"];

  $query = 
  
  
  "SELECT DISTINCT Evento.nombre, Evento.fecha_inicio
  FROM Evento, Productora
  WHERE Productora.nombre ilike '$name' 
  and Evento.aprobado like 'Aprobado'
  and Evento.fecha_inicio > $fech_desde
  and Evento.fecha_fin < $fech_hasta
  ORDER BY Evento.fecha_inicio
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
