<?php session_start() ?>

<?php include('templates/header.html');   ?>
<style>
  <?php include "./styles/style.css" ?>
</style>


<?php
if(isset($_POST['user_name']))
{
    #Llama a conexión, crea el objeto PDO y obtiene la variable $db

    require("config/conexion.php");

	$name = $_POST['user_name'];
    $pswd = $_POST['password'];


	$query = "SELECT * 
	FROM usuarios
    WHERE nombre = '$name'
    AND password = '$pswd';";


	$result = $db -> prepare($query);
	$result -> execute();
	$usi = $result -> fetchAll();

    foreach ($usi as $u) {
        $tipo = $u[2];
    }

    #cantidad de tuplas que cumplen las condiciones
    $filas = count($usi);
    echo $filas;

    if ($filas > 0)
    {
        
        #atributos de la sesion
        $_SESSION['name'] = $_POST['user_name'];
        $_SESSION['tipe'] = $tipo;

        if ($_SESSION['tipe']== "Artista")
        {# entrada artista
        echo "bienvenido";
        echo $name;
        header("location: inicio_artista.php");
        }
        else 
        {# entrada productora
        echo "bienvenido productora";
        echo $name;
        header("location: inicio_productora.php");
        }   
        
    }
    else
    {
        echo "/nError en datos";
        header("location: index.php");
        
    }
}

if(!isset($_POST['user_name']))
{
    header("location: index.php");
}

?>