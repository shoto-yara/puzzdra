<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/data/db_info.php');
	
	$id_d=$_GET["id"];
	$category_d=$_GET["category"];
	$name_d=$_GET["name"];
	
	$stamina_d=isset($_GET["stamina"])?htmlspecialchars($_GET["stamina"]):null;
	$battle_count=isset($_GET["battle_count"])?htmlspecialchars($_GET["battle_count"]):null;
	
	
	$battle_num=mysql_query("select battle from dungeon_data where dungeon_id=$id_d and category=$category_d and name='$name_d'") or die(mysql_error());
	
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
	}
	
	$battle_count=$battle_count+1;
	
	if($battle_num==$battle_count)
	{
		echo '<a href="dungeon_rank.php">戻る</a>';
	} 
	else
	{
		
		echo $battle_count.'バトル目';
		echo '<a href="dungeon.php?id='.$id_d.'&category='.$category_d.'&name='.$name_d.'&battle_count='.$battle_count.'">次へ</a><br>';
		/*mysql_query("select * from dungeon_enemy where dungeon_id=$id_d and category=$cat_d") or die(mysql_error()); */
	}
	?>
		
</body>
</html>









