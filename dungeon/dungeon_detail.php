<?php
	$id_d=$_GET["id"];
	$category_d=$_GET["category"];
	
	if(preg_match("/[^0-9]/",$id_d)){
		print '不正な値が入力されています<br>';
		print '<a href="normal_list.php">ここをクリックしてノーマルダンジョンリストに戻ってください</a><br>';
	}
	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	?>
	
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













