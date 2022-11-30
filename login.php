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

	$result = $db -> prepare($query);
	$result -> execute();
	$usuarios = $result -> fetchAll();
?>
    
    <h1 align="center"> Bienvenido  <?php echo $name ?> </h1>
<?php
    if (count($usuarios) > 0)
    {
        session_start();
        $_SESSION['name'] = $_POST['user_name'];
        $_SESSION['tipe'] = $usuarios[0][2];
        if ($_SESSION['tipe']== "Artista"){
        # entrada artista
        header("location: pagina_inicio_artista.php");}
        if ($_SESSION['tipe']== "Productora"){
        # entrada productora
        header("location: pagina_inicio_productora.php");}   
        
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