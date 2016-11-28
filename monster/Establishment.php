<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title>puzzdra</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<?php

	
		
		
	$mon=$_POST['mon'];
	print_r ($mon);
	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');

	$sql = "select money from monsters join user_monsters on monsters_id = monsters.id where user_monsters.id in  (" . implode(',', $mon) . ")";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	
	$total = 0;
	foreach ($stmt as $m) {
		$total += $m['money'];
	}
	
	$sql = "select point from user_monsters join monsters on monsters_id = monsters.id where user_monsters.id in  (" . implode(',', $mon) . ")";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	
	print ($sql);
	$point = 0;
	foreach ($stmt as $n){
		$point += $n['point'];
	}
	
	$sql = "update users  set  monsters_point =monsters_point + $point where id = 1 ";
	//print ($sql);
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	
	$sql = "update users  set coin = coin + $total where id = 1 ";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	
	$drop = "delete from user_monsters where id in (" .implode(',',$mon). ")";
	$sss = $dbh->prepare($drop);
	$sss->execute();
	

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