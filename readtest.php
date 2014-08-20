<?php 
	header("Content-type: text/html; charset=utf-8");
	$file_path = './2.txt';
	if(is_file($file_path)){
		$array = file($file_path);
		foreach ($array as $key => $num) {
			$num = 0;
			print_r($key);
		}
	}