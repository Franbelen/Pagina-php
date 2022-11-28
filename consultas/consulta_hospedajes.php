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
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$nombre = $_POST["nombre"];

	$query = "SELECT v.nombre_artista,h.nombre, h.lugar, COUNT(*)
	FROM estadía as h, viaje as v
	WHERE v.código = h.código
	AND LOWER(v.nombre_artista) LIKE LOWER('%$nombre%')
	GROUP BY v.nombre_artista,h.nombre, h.lugar
	ORDER BY v.nombre_artista;";
	
	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>
<h2> Información hospedaje </h2>
	<table>
    <tr>
	  <th>    Artista    </th>
      <th>    Nombre estadia    </th>
	  <th>    Lugar    </th>
	  <th>    Veces hospedado   </th>
    </tr>
  <?php
	echo "Nombre artista ingresado: $nombre \n";
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> <td>$artista[2]</td> <td>$artista[3]</td></tr>";
	}
  ?>
	</table>
	</div>

<?php include('../templates/footer.html'); ?>
