<?php
	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');
	
	$sql='SELECT * FROM users where id=1';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$user_data = $stmt->fetch(PDO::FETCH_ASSOC);

	session_start();
			$_SESSION['login']=1;
			$_SESSION['user_id']=$user_data['id'];
			$_SESSION['user_name']=$user_data['name'];
			$_SESSION['user_exp']=$user_data['exp'];
			$_SESSION['user_stamina']=$user_data['stamina'];
			$_SESSION['user_coin']=$user_data['coin'];
			$_SESSION['user_rank']=$user_data['rank'];
			$_SESSION['user_stone']=$user_data['stone'];
	
	$dbh = null;
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>pazzdra</title>
</head>
<body>
	
	<?= "ID:".$user_data['id']."<br>"; ?>
	
	<a href="/puzzdra/dungeon/dungeon_rank.php">Start</a>
	
</body>
</html>