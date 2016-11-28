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
	$id_d=isset($_POST["id"])? htmlspecialchars($_POST["id"]):null;

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
	
		<?php
		if($id_d<>"")
		{
			if(preg_match("/^[0-9]+$/", $id_d)==false){
				print 'このIDは検索できません<br>';
				print '<a href="id_search.php">OK</a>';
			}
			else
			{
			$rec=mysql_query("SELECT * FROM users WHERE id =$id_d") or die(mysql_error());
			$friend_status=mysql_fetch_array($rec);
			echo "{$friend_status['id']}  : {$friend_status['name']}<br>";
			echo '<a href="friend_request.php">はい</a><a href="id_search.php">いいえ</a>';
			}
		}
		else
		{
		?>
		
		<main>
			<form method="post" action="id_search.php">
				<input type="text" name="id">
				<input type="submit" value="検索">
			</form>
		</main>
		
	<?php
		}
	?>
	<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/footer.php');?>
	
</body>
</html>