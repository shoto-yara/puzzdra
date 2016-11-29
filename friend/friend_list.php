<?php 
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
?>
	
		<main>
		<?php 
		$sql="SELECT friend.friend_id, user.name, user.rank
					FROM users AS user, friend_list AS friend
				WHERE friend.user_id =1
					AND user.id = friend.friend_id";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		foreach($stmt as $friend_list){
				echo '<a href="friend.php?id='.$friend_list['friend_id'].'">'.$friend_list['name'].'</a><br><br>';
		}
		?>
		</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>