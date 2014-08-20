<?php 
	include('conn.php');
	$id = @$_GET['id'];
	$sql = "DELETE FROM comment WHERE id=".$id;
	mysql_query($sql);
	echo '删除成功';
	echo '<p><a href="sqlread.php">返回</a></p>';