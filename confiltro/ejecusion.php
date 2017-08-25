<?php 

require_once('conexion.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 


try {
if (!isset($_GET['q'])) {
	$sql = 'select * from user where status_id=1';
} else{

$sql = 'select * from user where status_id=?';


}



$statement=$pdo->prepare($sql);
$statement->execute(array($_GET['q']));

$result=$statement->fetchAll();






	
} catch (Exception $e) {

echo "Error ".$e->getMessage();
	
}


	


	 ?>


	 <?php 

foreach ($result as $res=>$value) {
 echo "<div>".$value['id']."</div>";

 echo "<div>".$value['email']."</div>";
 //echo "<div>".$value['email']."</div>";

}

	  ?>
</body>
</html>