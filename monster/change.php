<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	

	$hako1=$_post['hako1'];

	
	$sql = 'SELECT user_monsters.id,name FROM  user_monsters join monsters on monsters.id = user_monsters.monsters_id WHERE user_id = 1 ';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	print($sql);
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	$hako_num=$_GET['hako'];
?>
<main>
チーム<br><br>

<form action="team.php" method="post">
	<?php	
			foreach($stmt as $row){
				echo ' <input type="radio" name="sent" value="' . $row['id'] . '">:' . $row['name'];
				echo'<br>';
				//print "hako=['.$hako_num.']";
			}
	?>
	<input type="hidden" name="ban" value="<?= $hako_num ?>">
	<input Type="submit" value="OK">
</form>
	
</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>