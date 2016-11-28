<?php
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['login'])==false)
	{
		print 'ログインされていません。<br>';
		print '<a href="index.phpl">ログイン画面へ</a>';
		exit();
	}
	$user_id=$_SESSION['user_id'];
	
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>pazzdra</title>
	<link rel="stylesheet" href="/puzzdra/css/style.css">
</head>
<body>

	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); ?>
		
	<main>
		ダンジョン<br><br>
		<a href="fellow.php">協力プレイ</a><br>
		<a href="dungeon_list.php?category=3">スペシャルダンジョン</a><br>
		<a href="dungeon_list.php?category=2">テクニカルダンジョン</a><br>
		<a href="dungeon_list.php?category=1">ノーマルダンジョン</a><br>
		<br>
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>