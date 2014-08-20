<?php 
	include("conn.php");
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
	<head>
	<title>请回复</title>
	</head>
	    <body>
	    	<form action="" method="post">
	    		<p><textarea rows="10" name="replay"></textarea></p>
	    		<input type="submit" value="回复">
	    	</form>
	    </body>
	</html>
	<?php 
		$summary = $_POST['replay'];
		$coment_id = $_GET['id'];
		$time        = time();
		$sql          = "INSERT INTO Hcomment (`coment_id`,`summary`,`time`) VALUES ($coment_id,'$summary',$time);"
	
	
	
	?>