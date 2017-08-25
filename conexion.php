<?php 




$dsn='mysql:dbname=phpsqlcouse;host=localhost';
$user='root';
$password='12345678';

try {

	$pdo= new pdo($dsn,$user,$password);

	
} catch (Exception $e) {
	echo "Error al conectarnos".$e->getMessage();
	
}



/*$dsn='mysql:dbname=phpsqlcouse;host=127.0.0.1';
$user='root';
$password='12345678';

try {

$pdo= new PDO($dsn,$user,$password);
echo "Conexion correcta";
	
} catch (Exception $e) {

echo "Error al conectarnos".$e->getMessage();
	
}
*/

 ?>