<?php
	session_start();
	session_regenerate_id(true);
	if(isset($_SESSION['login'])==false)
	{
		print 'ログインされていません。<br>';
		print '<a href="index.php">ログイン画面へ</a>';
		exit();
	}
	$user['id']=$_SESSION['user_id'];
	
	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');
	
?>