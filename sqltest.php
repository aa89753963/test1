<?php 
	$link = mysql_connect('localhost','root','root') or die('link error'.mysql_error());
	$db  = mysql_select_db('test1');
	$sql = mysql_query("SELECT * FROM student WHERE id=1",$link);
	while ($row = mysql_fetch_array($sql)) {
		//print_r($row);
		$user['name'] = $row['name'];
		$user['sex']     =$row['sex'];
		$user['age']    = $row['age'];
		$users[] = $user[];
	}
	
	print_r($users);

	?>