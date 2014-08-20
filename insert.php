<?php 
	

	$file_path ='/home/s3/test/2.txt';
	$title     = $_POST['title'];
	$summary   = $_POST['summary'];
	$time      = time();
	$array	   = array('title'=>$title,
			   'summary'=>$summary,
			  'time'=>$time
						);
	$string	   = serialize($array)."\n";
	$a = file_put_contents($file_path,$string, FILE_APPEND);
	if($a > 0){
		echo '留言成功请<a href="read.php">查看留言</a>';
	}