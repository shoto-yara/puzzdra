<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	
	/******** 変数代入 ********/
	$id_d=isset($_POST["id"])? htmlspecialchars($_POST["id"]):null;
		if($id_d<>"")
		{
			if(preg_match("/^[0-9]+$/", $id_d)==false){
				print 'このIDは検索できません<br>';
				print '<a href="id_search.php">OK</a>';
			}
			else
			{
			$rec=mysql_query("SELECT * FROM users WHERE id =$id_d") or die(mysql_error());
			$friend_status=mysql_fetch_array($rec);
			echo "{$friend_status['id']}  : {$friend_status['name']}<br>";
			echo '<a href="friend_request.php">はい</a><a href="id_search.php">いいえ</a>';
			}
		}
		else
		{
?>
		<main>
			<form method="post" action="id_search.php">
				<input type="text" name="id">
				<input type="submit" value="検索">
			</form>
		</main>
		
	<?php
		}
	?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>