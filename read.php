<?php 
	header("Content-type: text/html; charset=utf-8");
	$file_path = './2.txt';
	if(is_file($file_path)){
		$array = file($file_path);
		foreach($array as $a){
			$message = unserialize($a);
			//print_r($message);
			echo '<p>';
			echo '留言标题:'.$message['title'];
			echo '</p>';
			echo '<p>'; 
			echo '留言内容:'.$message['summary'];
			echo '</p>';
			echo '<p>';
			echo '留言时间:'.date('Y',$message['time']).'年'.date('m',$message['time']).'月'.date('d',$message['time']).'日';
			echo '</p>';
			echo '<p>'; 
			echo '<a href="read.php" />';
			echo '</p>';
			
		}
	}