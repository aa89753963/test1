<?php 

	$file_path = '/home/s3/test/5.txt';
	$file = file($file_path);
	if (is_file($file_path)) {
		foreach ($file as $f) {
			$array = unserialize($f);
			echo '<p>';
			echo 'title:'.$array['name'];
			echo '</p>';
			echo '<p>';
			echo 'summary:'.$array['summary'];
			echo '</p>';
			echo '<p>';
			echo 'time:'.date("Ymd",$array['time']);
			echo '</p>';
		}
	}


?>