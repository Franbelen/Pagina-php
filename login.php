<?php include('templates/header.html');   ?>
<style>
  <?php include "./styles/style.css" ?>
</style>

<body> 

<?php
if(isset($_POST['user_name']))
{

    #Llama a conexión, crea el objeto PDO y obtiene la variable $db



    require("config/conexion.php");



	$name = $_POST['user_name'];
    $pswd = $_POST['password'];

	$query = "SELECT * 
	FROM usuarios;";
	
    
    #WHERE nombre ilike '$name' and password ilike '$pswd' 

	$result = $db -> prepare($query);
	$result -> execute();
	$usi = $result -> fetchAll();


    foreach ($usi as $u) {
        echo "<tr> <td>$u[0]</td> <td>$u[1]</td>  </tr>";
    }


    #cantidad de tuplas que cumplen las condiciones
    #revisar 
    $filas = count($usi);

    if ($filas > 0)
    {
        session_start();
        #atributos de la sesion
        $_SESSION['name'] = $_POST['user_name'];
        $_SESSION['tipe'] = $usi[0][2];

        if ($_SESSION['tipe']== "Artista"){
        # entrada artista
        header("location: inicio_artista.php");}
        else {
        # entrada productora
        header("location: inicio_productora.php");}   
        
    }
    else
    {
        echo "Error en datos";
        
        #header("location: index.php");
        
    }
}

if(!isset($_POST['user_name']))
{
        #header("location: index.php");
        echo "llega al final";
}

?>

</body>
</html>
