<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 

	/*$hako1 = false;
	$hako2 = false;
	$hako3 = false;
	$hako4 = false;
	$hako5 = false;*/
	$ban=isset($_POST["ban"])?htmlspecialchars($_POST["ban"]):null;
		if($ban<>""){
			$ban=$_POST["ban"];
			$sent=$_POST['sent'];
			$sql = "select  monsters.name,monsters.Type,user_monsters.level
			from  user_monsters join monsters on user_monsters.monsters_id=monsters.id
			where user_monsters.id = $sent";
				$stmt = $dbh->prepare($sql);
				$stmt->execute();
				print($sql);
				$mon = $stmt->fetch(PDO::FETCH_ASSOC);
		}
	
	

	//$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
?>
<main>
チーム<br><br>
		<form action="change.php" method="get">
<?php 

	for($i = 0; $i < 5; ++$i ){
		if($ban!=$i){
			if(isset($_GET["hako$i"])==false){
				echo '<a href="change.php?hako='.$i.'">選択</a>&nbsp;&nbsp';
			}
			echo $hako;
		}else{
			echo $mon['id']. ':' . $mon['name'];
			$slot = "update slot set slot  = slot + $ban";
			$cha = "update	team set user_monster_id = mon['name'] where team.slot = $ban;
			$aaa = $dbh->prepare($slot);
			$aaa.= $dbh->prepare($cha);
			$aaa->execute();
		}
	}

?>
	</form>
</main>
<?php require_once( "../footer.php"); ?>
</body>
</html>