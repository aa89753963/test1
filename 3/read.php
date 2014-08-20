<?php 
	include("conn.php");
	include('smarty.php');
	session_destroy();
	if (!$_SESSION['user']) {
		header('location:index.html');
	}
	$sql = "SELECT `id` ,`title` ,`summary` ,`time` FROM comment";
	$sql1 = mysql_query($sql,$conn);
	while($row = mysql_fetch_array($sql1)){
		$content[] = $row;
		//print_r($content);
	}
	foreach($content as $c){
	/*	echo '<p>';
		echo '留言标题:'.$c['title'];
		echo '</p>';
		echo '<p>';
		echo '留言内容:'.$c['summary'];
		echo '</p>';
		echo '<p>';
		echo '留言时间:'.date('Y-m-d',$c['time']);
		echo '</p>';
		$sql = "SELECT * FROM Hcomment WHERE comment_id=".$c['id'];
		$s = mysql_query($sql);
		while ($row = mysql_fetch_array($s)) {
			//print_r($row);
			echo '<ul>';
			echo '<li>管理员回复:'.$row['summary'];
			echo '<li>时间:'.date("Y-m-d",$row['time']);
			echo '</ul>';
		}
		echo '------------------------------------------------------------------------';
		*/
		$smarty->assign('c',$c);
		$smarty->display('index.tpl');

	}

