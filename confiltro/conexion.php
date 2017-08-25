<?php 



$dpn ='mysql:dbname=phpsqlcouse;host=localhost';
$user='root';
$pasword='12345678';

try {
	$pdo= new PDO($dpn,$user,$pasword);


	
} catch (Exception $e) {
	
echo "Error al tratar de conectarse en la base de datos ".$e->getMessage();

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