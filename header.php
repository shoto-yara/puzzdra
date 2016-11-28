<?php
	/******** データベース情報の読み込み ********/
	require_once($_SERVER['DOCUMENT_ROOT'] . "/puzzdra/data/db_info.php");

	/******** データベースへ接続、データベース選択 ********/
	$dbh=mysql_connect($SERV,$USER,$PASS) or die("失敗しました");
	mysql_select_db($DBNM);
	
	$rec=mysql_query("SELECT * FROM users WHERE id=$user_id") or die(mysql_error());
	$user=mysql_fetch_array($rec);
	
?>

<header>
	NAME
	<?= $user['name'];?>&nbsp;&nbsp;&nbsp;
	RANK
	<?= $user['rank'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='red' >
	EXP
	<?= $user['exp'];?>&nbsp;&nbsp;&nbsp;
	STONE
	<?= $user['stone'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='blue' >
	STAMINA
	<?= $user['stamina'];?>&nbsp;&nbsp;&nbsp;
	COIN
	<?= $user['coin'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='yellow' >
</header>

	