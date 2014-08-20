<?php 
	include("conn.php");
	$sql = "SELECT `id`, title`,`summary`,`time` FROM comment";
	$sql1 = mysql_query($sql,$conn);
	while($row = mysql_fetch_array($sql1)){
		$content[] = $row;

	}
	mysql_close($conn);
	foreach($content as $c){
		echo '<p>';
		echo '留言标题:'.$c['title'];
		echo '</p>';
		echo '<p>';
		echo '留言内容:'.$c['summary'];
		echo '</p>';
		echo '<p>';
		echo '留言时间:'.date('Y-m-d',$c['time']);
		echo '</p>';
		echo ''
		echo '----------------------------------------';

	}
	?>
	<form action="sqlhuifu.php?id=<?php echo $id; ?>&action=replay">
		<p><textarea name="replay" rows="10"></textarea></p>
		<input type="submit" value="回复">

	</form>