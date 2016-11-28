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
	$name_d=$_GET["name"];
	
	$stamina_d=isset($_GET["stamina"])?htmlspecialchars($_GET["stamina"]):null;
	
	 $battle_num=mysql_query("select battle from dungeon_data where dungeon_id=$id_d and category=$cat_d and name=$name_d") or die(mysql_error());
	
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
<?php
	if($stamina_d<>"")
	{
		 mysql_query("UPDATE users SET stamina = stamina-$stamina_d WHERE id=$id_d") or die(mysql_error());
		$battle_count=0;
		print $battle_num;
	}
	if($battle_num==$battle_count)
	{
	?>
		<a href="dungeon_rank.php">戻る</a>
	<?php
	} 
	else
	{
		?>
		<?=$battle_count;?>バトル目
		<?php $battle_count=$battle_count+1;?>
		<a href="dungeon.php?id=<?=$id_d?>&cat=<?= $cat_d; ?>&battle_count=<?=$battle_count;?>">次へ</a><br>
	<?php
		/*mysql_query("select * from dungeon_enemy where dungeon_id=$id_d and category=$cat_d") or die(mysql_error()); */
	}
	?>
		
</body>
</html>









