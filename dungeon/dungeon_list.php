<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	$category_d=$_GET["category"];
?>
		
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