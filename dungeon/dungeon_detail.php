<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	
	$list_id=$_GET["list_id"];
	$category=$_GET["category"];
	
	if(preg_match("/[^0-9]/",$list_id)){
		print '不正な値が入力されています<br>';
		print '<a href="normal_list.php">ここをクリックしてノーマルダンジョンリストに戻ってください</a><br>';
	}
	
	$sql="select * from dungeon_data where dungeon_list_id=$list_id and category=$category";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
	?>
	
	<main>
		<?php
		foreach($stmt as $dungeon){
			echo '<a href="dungeon.php?id='.$dungeon['dungeon_id'].'">';
			echo $dungeon['name'].'<br>スタミナ：'.$dungeon['stamina'].'バトル：'.$dungeon['battle'].'</a><br><br>';
		} 
		?>
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>













