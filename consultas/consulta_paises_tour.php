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

	$nombre_tour = $_POST["nombre_tour"];

	$query = "SELECT t.nombre, e.nombre_artista, e.país, e.ciudad, e.fecha_inicio
	FROM tour as t, eventos as e
	WHERE t.nombre = e.nombre
	AND LOWER(t.nombre) LIKE LOWER ('%$nombre_tour%')
	ORDER BY e.nombre_artista;";

	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>
<h2> Paises y mas informacion de tour </h2>
	<table>
    <tr>
	  <th>     Tour     </th>
	  <th>     Artista     </th>
      <th>     Paises      </th>
	  <th>     Ciudad      </th>
	  <th>     Fecha      </th>
    </tr>
  <?php
	echo "Nombre tour ingresado: $nombre_tour";
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[0]</td> <td>$artista[1]</td> <td>$artista[2]</td> <td>$artista[3]</td><td>$artista[4]</td> </tr>";
	}
  ?>
	</table>
	</div>
<?php include('../templates/footer.html'); ?>
