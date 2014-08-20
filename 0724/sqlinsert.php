<?php 
	include("conn.php");
	$name      = $_POST['title'];
	$summary = $_POST['summary'];
	$time        = time();
	$sql = "INSERT INTO `test`.`comment` ( `title`, `summary`, `time`) VALUES ('$name', '$summary', $time);";
	$s = mysql_query($sql,$conn);
	if ($s) {
		echo "<script>alert('提交成功！返回首页。');location.href='liuyan.html';</script>";
	}
	
	