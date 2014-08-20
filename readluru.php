<?php

	$file_path = '/home/s3/test/3.txt';
	if(is_file($file_path)){
		$array = file($file_path);
		$text   = unserialize($array);
		foreach ($text as $t) {
			print_r($t);
		}
	}