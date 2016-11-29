<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	
	/******** 変数代入 ********/
	$id_d=$_GET["id"];
?>
		<main>
		<?php 
		$sql="SELECT * FROM users WHERE id =$id_d";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		foreach($stmt as $friend_status){
				echo $friend_status['id'].'  : '.$friend_status['name'].'<br><br>';
		}
		?>
		</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
		
</body>
</html>