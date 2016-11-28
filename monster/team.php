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
	

	
	/*$hako2=$_post['hako2'];
	$hako3=$_post['hako3'];
	$hako4=$_post['hako4'];
	$hako5=$_post['hako5'];
	*/
	
	
	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');

	$sql = 'select ';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
?>
<main>
チーム<br><br>

<?php 
	if(isset($_POST['hako1'])==false){
	    echo '<a href="change.php">選択</a>&nbsp;&nbsp';
	}else{
		$hako1=$_post['hako1'];
	}
	echo '<a href="change.php">選択</a>&nbsp;&nbsp';
	echo '<a href="change.php">選択</a>&nbsp;&nbsp';
	echo '<a href="change.php">選択</a>&nbsp;&nbsp';
	echo '<a href="change.php">選択</a>&nbsp;&nbsp';
?>

</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>