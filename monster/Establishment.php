<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title>puzzdra</title>
	<link rel="stylesheet" href="/puzzdra/css/style.css">
</head>
<body>

<?php

	
		
		
	$mon=$_POST['mon'];
	//print_r ($mon);
	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');

	//$sql = "select money from monsters join user_monsters on monsters_id = monsters.id where user_monsters.id in  (" . implode(',', $mon) . ")";
	$sql = "update users ,money set coin = coin + sum(money) where monsters.id = 1";
	
	//print($sql);
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	require_once("../header.php");
	//mysql_query ("update users set coin = coin + $uru['money'] where id=1");
//	$monsters = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<br/>
<br/>
モンスターボックス　
<br/>
<br/>

<main>
<?php 
		echo 'うりました<br>';
?>
</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>