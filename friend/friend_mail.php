<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php');?>
	
		<main>
			<?php 
			$rec=mysql_query("SELECT friend.friend_id, user.name, user.rank
											FROM users AS user, friend_list AS friend
										WHERE friend.user_id =1
											AND user.id = friend.friend_id") or die(mysql_error());
			while($friend=mysql_fetch_array($rec)){ ?>
				<a href="send_mail.php?id=<?= $friend['friend_id']; ?>"><?=$friend['name'];?></a><br>
				<br>
			<?php
			} ?>
		</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>