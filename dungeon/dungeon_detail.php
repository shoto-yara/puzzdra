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
	$category_d=$_GET["category"];
	
	if(preg_match("/^[a-z]{1}-[0-9]{1}$/",$id_d)){
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
		$rec=mysql_query("select * from dungeon_data where dungeon_id='$id_d' and category=$category_d") or die(mysql_error());
		while($dungeon=mysql_fetch_array($rec)){ 
			echo '<a href="dungeon.php?id='.$id_d.'&category='.$category_d.'&name='.$dungeon["name"].'&stamina='.$dungeon["stamina"].'">';
			echo $dungeon['name'].'<br>スタミナ：'.$dungeon['stamina'].'バトル：'.$dungeon['battle'].'</a><br><br>';
			
		} 
		?>
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>













