<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 

	$ban = isset($_POST["ban"]) ? intval($_POST["ban"]) : null;
	if($ban !== null){
		$sent=$_POST['sent'];
		
		$slot = "update slot set slot  = slot + $ban";
		$aaa = $dbh->prepare($slot);
		$aaa->execute();
		
		$cha = "update	team set user_monster_id = $sent where team.slot = $ban";
		$sss = $dbh->prepare($cha);
		$sss->execute();
	}
?>
<main>
チーム<br><br>
		<form action="change.php" method="get">
<?php 
	for($i = 0; $i < 5; ++$i ){
		echo '<a href="change.php?hako='.$i.'">選択</a>&nbsp;&nbsp';
		//echo $mon['name'];
	}

?>
	</form>
</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>