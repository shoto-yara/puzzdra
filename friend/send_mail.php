<?php
	/******** データベース情報の読み込み ********/
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/data/db_info.php');

	/******** データベースへ接続、データベース選択 ********/
	$s=mysql_connect($SERV,$USER,$PASS) or die("失敗しました");
	mysql_select_db($DBNM);
	
	/******** セッション認証 ********/
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['login'])==false)
	{
		print 'ログインされていません。<br>';
		print '<a href="index.phpl">ログイン画面へ</a>';
		exit();
	}
	$user_id=$_SESSION['user_id'];

	/******** 変数代入 ********/
	$id_d=isset($_GET["id"])? htmlspecialchars($_GET["id"]):null;
	$mess_d=isset($_POST["message"])? htmlspecialchars($_POST["message"]):null;
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>pazzdra</title>
	<link rel="stylesheet" href="/puzzdra/css/style.css">
</head>
<body>

	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php');?>
	
		<main>
			<?php 
			if($mess_d<>"")
			{
				/*$sql = 'INSERT INTO mail(user_id, friend_id,message) VALUES(?,?,?)';
				$stmt = $dbh->prepare($sql);
				$date[] = $pro_name;
				$date[] = $pro_name;
				$date[] = $pro_name;
				$stmt->execute($date);*/
				echo '送信完了<br>';
				echo '<a href="friend_mail.php">OK</a>';
			}
			else if($id_d<>"")
			{
				$rec=mysql_query("select * from users where id=$id_d") or die(mysql_error());
				$friend=mysql_fetch_array($rec);
				?>
				<form method="post" action="send_mail.php">
					宛先 ： <?= $friend['name']; ?><br>
					<textarea name="message" rows="9" cols="30">
					</textarea>
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
