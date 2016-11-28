<?php
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

	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/header.php'); ?>
	
	<main>
		フレンド<br><br>
		<a href="friend_list.php">フレンドリスト</a><br>
		<a href="id_search.php">ID検索</a><br>
		<a href="friend_approval.php">フレンド承認</a><br>
		<a href="friend_mail.php">メール送信</a><br>
		<a href="close_friend.php">親友選択</a><br>
		<br>
	</main>
	
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>

	</body>
</html>