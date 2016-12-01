<?php 
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 
?>
	
		<main>
		<?php 
		$sql="
					SELECT
							mail.user_id,
							mail.friend_id,
							mail.message,
							mail.friend_request
					FROM 
							mail,
							users
					WHERE
							mail.user_id=$user_id
							OR mail.friend_request=1
							AND mail.user_id=$user_id
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