
?><?php
try {
  $user = 'grupo39';
  $password = 'bbdd.39';
  $databaseName = 'grupo39e3';
  $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");
  $user2 = 'grupo108';
  $password2 = 'Completo123';
  $databaseName2 = 'grupo108e3';
  $db2 = new PDO("pgsql:dbname=$databaseName2;host=localhost;port=5432;user=$user2;password=$password2");
} catch (Exception $e) {
  echo "No se pudo conectar a la base de datos: $e";
}
?>