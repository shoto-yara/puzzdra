<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>pazzdra</title>
	<link rel="stylesheet" href="/puzzdra/css/style.css">
</head>
<body>

<header>
	NAME
	<?= $_SESSION['user_name'];?>&nbsp;&nbsp;&nbsp;
	RANK
	<?= $_SESSION['user_rank'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='red' >
	EXP
	<?= $_SESSION['user_exp'];?>&nbsp;&nbsp;&nbsp;
	STONE
	<?= $_SESSION['user_stone'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='blue' >
	STAMINA
	<?= $_SESSION['user_stamina'];?>&nbsp;&nbsp;&nbsp;
	COIN
	<?= $_SESSION['user_coin'];?>&nbsp;&nbsp;&nbsp;
	<hr size='2' color='yellow' >
</header>

	