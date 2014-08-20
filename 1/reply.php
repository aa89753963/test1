<?php
    include("conn.php");
    $id = $_GET['id'];
    $action = @$_GET['action'];
    if ($action == 'replay') {
	$cid    = $_GET['cid'];
	$replay = $_POST['replay'];
	$time   = time();
	$sql    = "INSERT INTO Hcomment VALUES (NULL, $cid, '" . $replay . "', $time)";
	mysql_query($sql);
	header('location:sqlread.php');
	exit;
    }
    $sql = "SELECT * FROM comment WHERE id=" . $id;
    $res = mysql_query($sql);
    while($row = mysql_fetch_array($res)) {
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
<form action="reply.php?cid=<?php echo $id; ?>&action=replay" method="post">
		<p><textarea name="replay" rows="10"></textarea></p>
		<input type="submit" value="回复">

	</form>
