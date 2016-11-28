<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title>puzzdra</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<?php

	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');

	$sql = 'SELECT * FROM users ';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
?>
<main>







</main>
</body>
</html>