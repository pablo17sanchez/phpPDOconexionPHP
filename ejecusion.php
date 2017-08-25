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
$sql='select * from user';

$statement =$pdo->prepare($sql);

$statement->execute();

$result =$statement->fetchAll();

	
	


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