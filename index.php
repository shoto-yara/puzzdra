<?php
	/******** データベース情報の読み込み ********/
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/data/db_info.php');

	/******** データベースへ接続、データベース選択 ********/
	$s=mysql_connect($SERV,$USER,$PASS) or die("失敗しました");
	mysql_select_db($DBNM);
	
	$rec=mysql_query("SELECT * FROM users where id=1") or die(mysql_error());
	$user=mysql_fetch_array($rec);
	
	session_start();
			$_SESSION['login']=1;
			$_SESSION['user_id']=$user['id'];
			$_SESSION['user_name']=$user['name'];
			$_SESSION['user_exp']=$user['exp'];
			$_SESSION['user_stamina']=$user['stamina'];
			$_SESSION['user_coin']=$user['coin'];
			$_SESSION['user_rank']=$user['rank'];
			$_SESSION['user_stone']=$user['stone'];
	
	$dbh = null;
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>pazzdra</title>
</head>
<body>
	
	<?= "ID:".$user['id']."<br>"; ?>
	
	<a href="/puzzdra/dungeon/dungeon_rank.php">Start</a>
	
</body>
</html>