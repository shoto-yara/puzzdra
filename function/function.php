<?php
function dungeon_list($id, $cat)
{
	<?php
		$rec=mysql_query("select * from dungeon_data where dungeon_id=$id and category=$cat") or die(mysql_error());
		while($dungeon=mysql_fetch_array($rec)){ ?>
			<a href="dungeon.php?id=<?=$dungeon['dungeon_id']?>&cat=<?= $dungeon['category'];?>&stamina=<?=$dungeon['stamina']?>&battle=<?=$dungeon['battle']-1?>">
			<?=$dungeon['name']?><br>スタミナ：<?=$dungeon['stamina']?> バトル：<?=$dungeon['battle']?></a><br>
			<br>
		<?php
		} ?>	
}





?>