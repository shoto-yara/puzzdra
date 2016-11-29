<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
	<title>puzzdra</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<?php

	require_once("../header.php");
		
	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');

	$sql = 'SELECT user_monsters.id,name FROM  user_monsters join monsters on monsters.id = user_monsters.monsters_id WHERE user_id = 1 ';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

//	$monsters = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<br/>
<br/>
モンスターボックス
<br/>
<br/>
<main>

	<form action="Confirmation.php" method="post">
		<?php	foreach($stmt as $row){
			echo ' <input type="checkbox" name="sale[]" value="' . $row['id'] . '">:' . $row['name'];
			
			echo'<br>';
		}
		?>
		<input Type="submit" value="OK">
</form>
</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>