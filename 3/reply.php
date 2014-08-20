<?php 
	include("conn.php");
	$id = @$_GET['id'];
	$action = @$_GET['action'];
	if ($action == 'reply') {
		$reply = $_POST['reply'];
		$time  = time();
		$sql = "INSERT INTO Hcomment VALUES (NULL, $id, '" . $reply . "', $time)";
		mysql_query($sql);
		header('location:sqlread.php');
		exit;
	}
	$sql = "SELECT * FROM comment WHERE id=" . $id;
	$sql1 = mysql_query($sql);
	while ($row = mysql_fetch_array($sql1)) {
		$comment[] = $row;
	}
	foreach ($comment as $c) {
		echo '<p>';
		echo '留言标题:'.$c['title'];
		echo '</p>';
		echo '<p>';
		echo '留言内容:'.$c['summary'];
		echo '</p>';
		echo '<p>';
		echo '留言时间:'.date('Y-m-d',$c['time']);
		echo '</p>';
		
	}
?>

		<form action="reply.php?id=<?php echo $id; ?>&action=reply" method="post">
			<p><textarea name="reply" rows="10"></textarea></p>
			<input type="submit" value="回复">
		</form>