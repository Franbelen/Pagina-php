<?php include('../templates/header.html');?>

<body>
  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <div id='title'>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$query = "SELECT *
	FROM usuarios;";

	$result = $db -> prepare($query);
	$result -> execute();
	$artistas = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>Nombre</th>
      <th>Tipo</th>
      <th>Contraseña</th>
    </tr>
  <?php
	
	foreach ($artistas as $artista) {
  		echo "<tr> <td>$artista[1]</td> <td>$artista[2]</td> <td>$artista[3]</td></tr>";
	}
  ?>
	</table>
	</div>
<?php include('../templates/footer.html'); ?>