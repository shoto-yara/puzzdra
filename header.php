<?php
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['login'])==false)
	{
		print 'ログインされていません。<br>';
		print '<a href="index.php">ログイン画面へ</a>';
		exit();
	}
	$user_id=$_SESSION['user_id'];
	
	/******** データベース情報の読み込み ********/
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");

	/******** データベースへ接続、データベース選択 ********/
	$dbh=mysql_connect($SERV,$USER,$PASS) or die("失敗しました");
	mysql_select_db($DBNM);
	
	$rec=mysql_query("SELECT * FROM users WHERE id=$user_id") or die(mysql_error());
	$user=mysql_fetch_array($rec);

	
	
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
	<?= $user['name'];?>&nbsp;&nbsp;&nbsp;
	RANK
	<?= $user['rank'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='red' >
	EXP
	<?= $user['exp'];?>&nbsp;&nbsp;&nbsp;
	STONE
	<?= $user['stone'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='blue' >
	STAMINA
	<?= $user['stamina'];?>&nbsp;&nbsp;&nbsp;
	COIN
	<?= $user['coin'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='yellow' >
</header>

	