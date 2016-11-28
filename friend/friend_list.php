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
			$rec=mysql_query("SELECT friend.friend_id, user.name, user.rank
											FROM users AS user, friend_list AS friend
										WHERE friend.user_id =1
											AND user.id = friend.friend_id") or die(mysql_error());
			while($friend_list=mysql_fetch_array($rec)){ ?>
				<a href="friend.php?id=<?= $friend_list['friend_id']; ?>"><?=$friend_list['name'];?></a><br>
				<br>
			<?php
			} ?>
		</main>
		
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>