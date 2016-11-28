<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	
	/******** 変数代入 ********/
	$id_d=$_GET["id"];
?>
	
		<main>
			<?php 
			$rec=mysql_query("SELECT * FROM users WHERE id =$id_d") or die(mysql_error());
			while($friend_status=mysql_fetch_array($rec)){
				echo $friend_status['id'].'  : '.$friend_status['name'].'<br><br>';
			}
			?>
		</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
		
</body>
</html>