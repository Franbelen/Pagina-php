
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

  "SELECT DISTINCT e.nombre, e.Productora
  FROM Evento as e, Presentacion as p
  WHERE e.Productora ILIKE  '$name'
  
 
  ;";





 # ORDER BY p.fecha_inicio 

	$result = $db2 -> prepare($query);
	$result -> execute();
	$eventos = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>Nombre_evento</th>
      <th>productora</th>
    </tr>
  
      <?php
        foreach ($eventos as $e) {
          echo "<tr><td>$e[0]</td><td>$e[1]</td></tr>";
      }
      ?>
      
  </table>



<?php include('../templates/footer.html'); ?>
