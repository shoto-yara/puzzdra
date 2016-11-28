<?php
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['login'])==false)
	{
		print 'ログインされていません。<br>';
		print '<a href="index.php">ログイン画面へ</a>';
		exit();
	}
	$user_id=$_SESSION['user_id'];
	
	$SERV="localhost";
	$USER="root";
	$PASS="";
	$DBNM="puzzdra";

	/******** データベースへ接続、データベース選択 ********/
	$dbh=mysql_connect($SERV,$USER,$PASS) or die("失敗しました");
	mysql_select_db($DBNM);
	
	$rec=mysql_query("SELECT * FROM users WHERE id=$user_id") or die(mysql_error());
	$user=mysql_fetch_array($rec);
?>