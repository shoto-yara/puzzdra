<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	$category_d=$_GET['category'];
?>
	<main>
		<?php
		$sql="SELECT * FROM dungeon_list where category=$category_d";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		foreach($stmt as $dungeon){
			echo '<a href="dungeon_detail.php?id='.$dungeon['dungeon_id'].'&category='.$category_d.'">'.$dungeon['name'].'</a><br><br>';
		}
		
		/*while(true){
			$dungeon = $stmt->fetch(PDO::FETCH_ASSOC);
			if($dungeon==false)
			{
				break;
			}
			echo '<a href="dungeon_detail.php?id='.$dungeon['dungeon_id'].'&category='.$category_d.'">'.$dungeon['name'].'</a><br><br>';
			
		 } 
		 */
		 
		 ?>
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>