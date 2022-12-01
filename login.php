<?php session_start() ?>

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
	FROM usuarios
    WHERE nombre = strval($name) and password = strval($pswd);";
	$result = $db -> prepare($query);
	$result -> execute();
	$usi = $result -> fetchAll();

    foreach ($usi as $u) {
        echo "<tr> <td>$u[0]</td> <td>$u[1]</td>  <td>$u[2]</td> <td>$u[3]</td></tr><br>";
    }


    #cantidad de tuplas que cumplen las condiciones
    $filas = count($usi);

    echo $filas;

    if ($filas > 0)
    {
        
        #atributos de la sesion
        $_SESSION['name'] = $_POST['user_name'];
        $_SESSION['tipe'] = $usi[1][2];

        if ($_SESSION['tipe']== "Artista")
        {# entrada artista
        header("location: inicio_artista.php");
        }
        else 
        {# entrada productora
        header("location: inicio_productora.php");
        }   
        
    }
    // else
    // {
    //     echo "/nError en datos";
    //     #header("location: index.php");
        
    // }
}

if(!isset($_POST['user_name']))
{
    header("location: index.php");
}

?>

</body>
</html>
