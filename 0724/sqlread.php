<?php 
	include("conn.php");
	$sql = "SELECT `title`,`summary`,`time` FROM comment";
	$sql1 = mysql_query($sql,$conn);
	while($row = mysql_fetch_array($sql1)){
		$content[] = $row;

	}

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
		echo '----------------------------------------';

	}
	?>

