<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title>puzzdra</title>
	<link rel="stylesheet" href="/puzzdra/css/style.css">
</head>
<body>

<?php

	require_once("../header.php");
	if(isset($_POST['sale'])==false){
		echo '<main>';
		print 'モンスターが指定されていません。<br/>';
		echo '<a href="sale.php"> 戻る</a>';
		echo '</main>';
		require_once( "../footer.php"); 
		exit();
	}else {
		$sale=$_POST['sale'];
	}

	//print_r ($sale);
	
	
		
	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');

	$sql = "SELECT user_monsters.id,name,money 
	FROM  user_monsters join monsters on user_monsters.monsters_id = monsters.id 
	WHERE user_id = 1  and user_monsters.id in (" . implode(',', $sale) . ")";
	$stmt = $dbh->prepare($sql);
	
	//print($sql);
	$stmt->execute();
//	$monsters = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<br/>
<br/>
モンスターボックス
<br/>
<br/>
<main>

<form action="Establishment.php" method="post">
<?php
	foreach($stmt as $uru){
		echo $uru['id']. ':' . $uru['name'];
		echo $uru['money'].'円';
		echo'<br><br>';
		
		echo '<input Type="hidden" name="mon[]" value="' .$uru['id'].'">';
		
	}
	echo '上記のモンスターを売却しますか？<br><br>';
	echo '<input type="submit"  value="はい">';
	echo '<a href="sale.php"> いいえ</a>';
?>
</form>
</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>
<?php $dbh=null; ?>