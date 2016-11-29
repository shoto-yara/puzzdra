<?php
	$sql="SELECT * FROM users where id=$user_id";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	
	$users_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>pazzdra</title>
	<link rel="stylesheet" href="/puzzdra/css/style.css">
</head>
<body>

<header>
	NAME
	<?= $users_data['name'];?>&nbsp;&nbsp;&nbsp;
	RANK
	<?= $users_data['rank'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='red' >
	EXP
	<?= $users_data['exp'];?>&nbsp;&nbsp;&nbsp;
	STONE
	<?= $users_data['stone'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='blue' >
	STAMINA
	<?= $users_data['stamina'];?>&nbsp;&nbsp;&nbsp;
	COIN
	<?= $users_data['coin'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='yellow' >
</header>

	