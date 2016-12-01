<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); 

	/******** 変数代入 ********/
	$id=isset($_GET["id"])? htmlspecialchars($_GET["id"]):null;
	$mess=isset($_POST["message"])? htmlspecialchars($_POST["message"]):null;
?>
	
		<main>
			<?php 
			if($mess<>"")
			{
				$id=$_POST['id'];
				$sql = 'INSERT INTO mail(user_id, friend_id,message) VALUES(?,?,?)';
				$stmt = $dbh->prepare($sql);
				$date[] = $user_id;
				$date[] = $id;
				$date[] = $mess;
				$stmt->execute($date);
				echo '送信完了<br>';
				echo '<a href="friend_mail.php">OK</a>';
			}
			else if($id<>"")
			{
				$sql="select * from users where id=$id";
				$stmt = $dbh->prepare($sql);
				$stmt->execute();
				$friend = $stmt->fetch(PDO::FETCH_ASSOC);
			?>
				<form method="post" action="send_mail.php">
					宛先 ： <?= $friend['name']; ?><br>
					<textarea name="message" rows="9" cols="30">
					</textarea>
					<input type="hidden" name="id" value="<?=$id;?>">
					<br>
					<input type="submit" value="送信">
				</form>
			<?php
			} 
			?>
		</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>
