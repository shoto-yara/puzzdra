<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
	

	/*$hako1=$_post['hako1'];
	$hako2=$_post['hako2'];
	$hako3=$_post['hako3'];
	$hako4=$_post['hako4'];
	$hako5=$_post['hako5'];*/
	
	$sql = 'SELECT user_monsters.id,name FROM  user_monsters join monsters on monsters.id = user_monsters.monsters_id WHERE user_id = 1 ';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
?>
<main>
チーム<br><br>

<form action="team.php" method="post">
	<?php	
		for($i = 0; $i < 5; ++$i ){
			foreach($stmt as $row){
				echo ' <input type="radio" name="hoko='.$i.'[]" value="' . $row['id'] . '">:' . $row['name'];
				echo'<br>';
			}
		}
	?>
	<input Type="submit" value="OK">

</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>