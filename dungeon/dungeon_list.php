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

	$category_d=$_GET["category"];
	
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
	<META http-equiv="Content=Type" content="text/html;charset=utf8">
	<title>pazzdra</title>
	<link rel="stylesheet" href="/puzzdra/css/style.css">
</head>
<body>

	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); ?>
		
	<main>
		<?php
		$rec=mysql_query("SELECT * FROM dungeon_list where category=$category_d") or die(mysql_error());
		while($dungeon=mysql_fetch_array($rec)){
			echo '<a href="dungeon_detail.php?id='.$dungeon['dungeon_id'].'&category='.$category_d.'">'.$dungeon['name'].'</a><br><br>';
			
		 } 
		 ?>
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>