<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 

	/*$hako1=$_post['hako1'];
	$hako2=$_post['hako2'];
	$hako3=$_post['hako3'];
	$hako4=$_post['hako4'];
	$hako5=$_post['hako5'];*/
	
	
	
	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');

	$sql = 'select monsters.name,monsters.Type,user_monsters.level
				from team 
				join user_monsters on team.user_monster_id=user_monsters.id
				join monsters on user_monsters.monsters_id=monsters.id';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
?>
<main>
チーム<br><br>
		<form action="change.php" method="get">
<?php 
	for($i = 0; $i < 5; ++$i ){
		if(isset($_POST["hako".$i])==false){
			echo '<a href="change.php?hako='.$i.'">選択</a>&nbsp;&nbsp';
		}else{
			echo "print($hako1)";
		}
	}
	print($hako1);
?>
	</form>
</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>