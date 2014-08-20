<?php 
	$name = $_POST['title'];
	$summary = $_POST['summary'];
	$file_path = '/home/s3/test/5.txt';
	$time       =time();
	$array      =array('name' => $name,
			    'summary' => $summary,
			    'time' => $time
			   );
	$string = serialize($array)."\n";
	$a = file_put_contents($file_path,$string,FILE_APPEND);
	if($a>0){
		echo 'OK,chakanliuyan<a href="read1.php">look</a>';
	}

	if($_POST){
		$sql = "INSERT INTO comments (`title`,`summary`,`time`) VALUES ('".$name."','".$summary."','".$time."')";

	}