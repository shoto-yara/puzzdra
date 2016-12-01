<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 

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
	
	$sql = "select money from monsters join user_monsters on monsters_id = monsters.id where user_monsters.id in  (" . implode(',', $sale) . ")";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	
	$total = 0;
	foreach ($stmt as $m) {
		$total += $m['money'];
	}
	$sql = "select point from user_monsters join monsters on monsters_id = monsters.id where user_monsters.id in  (" . implode(',', $sale) . ")";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	
	//print ($sql);
	$point = 0;
	foreach ($stmt as $n){
		$point += $n['point'];
	}
	
	$sql = "SELECT user_monsters.id,name,money 
	FROM  user_monsters join monsters on user_monsters.monsters_id = monsters.id 
	WHERE user_id = 1  and user_monsters.id in (" . implode(',', $sale) . ")";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	//print($sql);
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
		echo $uru['money']. 'coin';
		echo'<br><br>';
		
		echo '<input Type="hidden" name="mon[]" value="' .$uru['id'].'">';
		
	}
	echo"合計は $total coinです<br><br>";
	echo"モンスターポイントは$point です<br><br>";
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