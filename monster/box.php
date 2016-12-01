<?php

	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	
	$sql = 'SELECT monsters.id, name as mon, level FROM  user_monsters join monsters on monsters.id = user_monsters.monsters_id WHERE user_id = 1 ';
	$stmt = $dbh->prepare($sql);

	
	$stmt->execute();

//	$monsters = $stmt->fetch(PDO::FETCH_ASSOC);
	

	
	

?>

<br/>
<br/>
モンスターボックス
<br/>
<br/>

<main>

<?php	foreach($stmt as $row){
	echo  $row['mon'].'&nbsp;&nbsp;&nbsp'.$row['level'].'Lv';
	echo'<br>';
}

?>
</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>