<?php 
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
?>
	
		<main>
		<?php 
		$sql="
					SELECT
							user_id,
							friend_id,
							message,
							friend_request
					FROM 
							mail
					WHERE
							friend_id = $user_id
							AND message != '%'
							OR friend_request = 1
							AND user_id = $user_id
					";
		$stmt = $dbh->prepare($sql);
		$stmt->execute();
		
		foreach($stmt as $mail_list){
				echo '<a href="friend.php">'.$mail_list['friend_id'].'-'.$mail_list['user_id'].'-'.$mail_list['message'].'</a><br><br>';
		}
		?>
		</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>