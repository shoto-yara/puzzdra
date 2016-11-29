<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/data/db_info.php');
	
	$id=$_GET["id"];
	$battle_count=isset($_GET["battle_count"])? htmlspecialchars($_GET["battle_count"]):null;
	
	$sql="select * from dungeon_data where dungeon_id=$id";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	$dungeon = $stmt->fetch(PDO::FETCH_ASSOC);
	
	if(preg_match("/[^0-9]/",$id)){
		print '不正な値が入力されています<br>';
		print '<a href="/puzzdra/dungeon/dungeonl_rank.php">ここをクリックしてダンジョントップに戻ってください</a><br>';
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
	if(empty($battle_count)){
		$sql="UPDATE users SET stamina = stamina-{$dungeon['stamina']} WHERE id=$user_id";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		$battle_count=0;
	}
	
	$battle_count=$battle_count+1;
	
	if($dungeon['stamina']<$battle_count)
	{
		echo '<a href="dungeon_rank.php">戻る</a>';
	} 
	else
	{
		echo $battle_count.'バトル目';
		echo '<a href="dungeon.php?id='.$id.'&battle_count='.$battle_count.'">次へ</a><br>';
	}
	
	?>
		
</body>
</html>









