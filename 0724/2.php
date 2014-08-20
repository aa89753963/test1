<?php 
include("conn.php");
//$_SESSION['name'] = 'zhangsan';
header('location:reply.php?id=5');
exit;	
	$sql = "SELECT `id`, `title`,`summary`,`time` FROM comment";
	$sql1 = mysql_query($sql,$conn);
	while($row = mysql_fetch_array($sql1)){
		$content[] = $row;

	}
	//echo '<pre>';
	//print_r($content);exit;
	//mysql_close($conn);
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
		echo '<p><a href="reply.php?id=' . $c['id'] . '&action=comment">Reply</a></p>';
		$sql = "SELECT * FROM Hcomment WHERE comment_id = " . $c['id'];
		$res = mysql_query($sql);
		while($row = mysql_fetch_array($res)) {
		     echo '<ul>';
		     echo '<li>Reply: ' . $row['summary'] . '</li>';
		     echo '<li>Date: ' . date('Ymd', $row['time']) . '</li>';
		     echo '</ul>';
		}
		echo '----------------------------------------';

	}
	?>
	<form action="sqlhuifu.php?id=<?php echo $id; ?>&action=replay">
		<p><textarea name="replay" rows="10"></textarea></p>
		<input type="submit" value="回复">

	</form>
