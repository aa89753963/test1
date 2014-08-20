<?php 
	$name     = $_POST['D_name'];
	$sex        = $_POST['D_sex'];
	$phone    = $_POST['D_phone'];
	$number  = $_POST['D_number'];
	$age        = $_POST['D_age'];
	$email      = $_POST['D_email'];
	$time        = time();
	$array       = array('name' => $name,
			'sex' => $sex,
			'phone' => $phone,
			'number' => $number,
			'age' => $age,
			'email' => $email,
			'time' => $time);
	$string       = serialize($array);
	$file_path   = '/home/s3/test/3.txt'
	file_put_contents($file_path,$string,FILE_APPEND);