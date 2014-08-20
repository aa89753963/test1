<?php 
		include("conn.php");
		$sql = "SELECT * FROM zu";
		$sql1 = mysql_query();
		while ($row = mysql_fetch_array($sql1)) {
			$content[] = $row;
		}
		foreach ($content as $c) {
			print_r($c);
			/*echo '<p>';
			echo '留言标题:'.$c['title'];
			echo '</p>';*/
		}














			?>