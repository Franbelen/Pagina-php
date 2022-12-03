<?php
  session_start();
  $name = $_SESSION['name'];
?>
<?php include('../templates/header.html');   ?>
<body>
<?php
  #hago la consulta aquí mismo para que se muestren los eventos apenas aparezca la página
  require("../config/conexion.php");
  
  $query = 
  "SELECT e.nombre, e.fecha_inicio, e.nombre_recinto, t.nombre, es.nombre, es.lugar, v.tipo_traslado, ec.asiento, (SELECT STRING_AGG(e.nombre_artista, ',') AS result
  FROM eventos as e, {
    SELECT eventos
    FROM artistas, eventos
    WHERE eventos.nombre_artista = ’$nombre’
    } as eventos_artista
  WHERE e.nombre = eventos_artistas.nombre
  ) as Artistas_relacionados
  FROM eventos a s e, artistas as a, tour as t, estadía as es, viaje as v, entradascortesia as ec 
  WHERE a.nombre = '$nombre'
  AND e.nombre_artista = '$nombre’
  AND e.nombre = t.nombre
  AND es.codigo = v.codigo
  AND v.nombre_artista = ’$nombre'
  AND ec.nombre_artista = ’$nombre’
  AND ec.nombre_evento = e.nombre 
  ;";
  


	$result = $db -> prepare($query);
	$result -> execute();
	$resultados = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>x</th>
      <th>x</th>
      <th>x</th>
      <th>x</th>
      <th>x</th>
      <th>x</th>
      <th>x</th>
    </tr>
  
      <?php
        foreach ($resultados as $r) {
          echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td></tr>";
      }
      ?>
      
  </table>



<?php include('../templates/footer.html'); ?>
