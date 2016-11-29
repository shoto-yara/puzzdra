<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	$category_d=$_GET['category'];
	
	$sql="SELECT * FROM dungeon_list where category=$category_d";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();
?>
	<main>
		<?php
		foreach($stmt as $dungeon_list){
			echo '<a href="dungeon_detail.php?list_id='.$dungeon_list['dungeon_list_id'].'&category='.$category_d.'">'.$dungeon_list['name'].'</a><br><br>';
		}
		 ?>
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>