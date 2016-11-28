<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/data/db_info.php');

	$s=mysql_connect($SERV,$USER,$PASS) or die("失敗しました");
	mysql_select_db($DBNM);
	
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['login'])==false)
	{
		print 'ログインされていません。<br>';
		print '<a href="index.phpl">ログイン画面へ</a>';
		exit();
	}
	$user_id=$_SESSION['user_id'];

	$id_d=$_GET["id"];
	$cat_d=$_GET["cat"];
	
	if(preg_match("/[^0-9]/",$id_d)){
		print '不正な値が入力されています<br>';
		print '<a href="normal_list.php">ここをクリックしてノーマルダンジョンリストに戻ってください</a><br>';
	}
	
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
		<?php
		$rec=mysql_query("select * from dungeon_data where dungeon_id=$id_d and category=$cat_d") or die(mysql_error());
		while($dungeon=mysql_fetch_array($rec)){ ?>
			<a href="dungeon.php?id=<?=$dungeon['dungeon_id']?>&cat=<?= $dungeon['category'];?>&name=<?= $dungeon['name'];?>&stamina=<?=$dungeon['stamina']?>">
			<?=$dungeon['name']?><br>スタミナ：<?=$dungeon['stamina']?> バトル：<?=$dungeon['battle']?></a><br>
			<br>
		<?php } ?>
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>













