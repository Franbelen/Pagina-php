<?php
if(isset($_POST['user_name']))
{

    #Llama a conexión, crea el objeto PDO y obtiene la variable $db



    require("config/conexion.php");


	$name = $_POST['user_name'];
    $password = $_POST['password'];

	$query = "SELECT * 
	FROM usuarios
	WHERE nombre = $name and password = $password;";

	#$result = $db -> prepare($query);
	#$result -> execute();
	#$usuarios = $result -> fetchAll();
    $consulta = pg_query($db, $query)

    

    echo $usuarios;


    #cantidad de tuplas que cumplen las condiciones
    #revisar 
    $filas = pg_num_rows($usuarios);

    if ($filas > 0)
    {
        session_start();
        #atributos de la sesion
        $_SESSION['name'] = $_POST['user_name'];
        $_SESSION['tipe'] = $usuarios[0][2];

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
        
        header("location: index.php");
        
    }
}

if(!isset($_POST['user_name']))
{
        header("location: index.php");
}

?>