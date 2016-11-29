<?php
	/******** データベース情報の読み込み ********/
	require_once($_SERVER['DOCUMENT_ROOT'] . '/puzzdra/data/db_info.php');

	$dsn = 'mysql:dbname=puzzdra;host=localhost';
	$user = 'root';
	$password = '';
	$dbh = new PDO($dsn,$user,$password);
	$dbh ->query('SET NAMES utf8');

	$sql = 'SELECT * FROM users ';
	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	
	require_once("header.php");
?>
<main>
<br/>
<br/>
<br/>
<a href="monster/team.php">チーム
&nbsp;&nbsp;&nbsp;
<br/>
<br/>
<br/>
<a href="monster/level.php">パワーアップ
&nbsp;&nbsp;&nbsp;
<br/>
<br/>
<br/>
<a href="monster/evolution.php">進化
&nbsp;&nbsp;&nbsp;
<br/>
<br/>
<br/>
<a href="monster/skill.php">スキル継承
&nbsp;&nbsp;&nbsp;
<br/>
<br/>
<br/>
<a href="monster/sale.php">モンスター売却
&nbsp;&nbsp;&nbsp;
<br/><br/><br/>
<a href="monster/box.php">モンスターBOX
&nbsp;&nbsp;&nbsp;
<br/><br/><br/>
</main>
<?php require_once( "footer.php"); ?>

</body>
</html>