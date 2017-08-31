<pre><?php
require_once('connection.php');

$sql = 'SELECT * FROM news WHERE 1 ';
$seach_terms = isset($_GET['title']) ?$_GET['title'] : '' ;
$search_arr = explode(' ', $seach_terms);

$arr_sql_terms = array();
$n = 0;
foreach( $search_arr as $search_term )
{

  $sql .= " AND title LIKE :search{$n}";
  $arr_sql_terms[":search{$n}"] = '%' . $search_term . '%';
  $n++;
}

$statement = $pdo->prepare($sql);
$statement->execute($arr_sql_terms);
$results = $statement->fetchAll();
?>
</pre>
<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>PHP & SQL</title>
<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<body>
 
<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li class="menu-text">Curso PHP & SQL</li>
</ul>
</div>
</div>
 
<div class="row column text-center">
<h2>LIMIT</h2>
<hr>
</div>
<div class="row column">
<div class="callout primary">
<h3>Noticias</h3>
<form method="get">
  <div class="row">
    <div class="medium-6 columns">
      <label>Ingrese el título
        <input type="text" name="title" placeholder="ej. javascript" value="<?php echo $seach_terms; ?>">
        <input class="button" type="submit" value="BUSCAR" />
      </label>
    </div>
  </div>
</form>
</div>
<table width="100%">
  <thead>
    <tr>
      <th>ID</th>
      <th>Título</th>
      <th>Contenido</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($results as $rs)
    {
  ?>
    <tr>
      <td width="300"><?php echo $rs['id']; ?></td>
      <td width="300"><?php echo $rs['title']; ?></td>
      <td><?php echo $rs['content']; ?></td>
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
</div>
<hr>

</div>
<div class="large-3 large-offset-2 columns">
</div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
    </script>
</body>
</html>
