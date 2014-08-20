<?php
	$array[] = 'a';
    $action = $_GET['action'];
    $id      = $_GET['id'];
    if ($action == 'reply') {
	$reply = $_POST['EDIT_reply'];
	if (!$reply) {
	    header("location:1.php");
	}
	$file  = '/home/s3/test/project/1.txt';
	if (is_file($file)) {
	    $array = file($file);
	    $narray = array();
	    foreach ($array as $key => $a) {
		$message = unserialize($a);
		if ($key == $id) {
		    $message['reply'][] = $reply;
		}
		$narray[$key] = $message;
                $string .= serialize($message) . "\n";
	    }
	file_put_contents($file, $string);
	}
    } else {
	    $name    = $_POST['EDIT_name'];
	    $summary = $_POST['EDIT_summary'];
	    $time    = time();
	    $array   = array(
			'name'    => $name,
			'date'    => $time,
			'summary' => $summary
		    );
	    $string  = serialize($array) . "\n";
	    $file    = fopen('/home/sunyan/project/1.txt', 'a+');
	    fwrite($file, $string);
	    fclose($file);
	}
    header("location:1.php");
exit;
