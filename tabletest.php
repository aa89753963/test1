<?php 
	$array =array();
	$array[0]['type'] = '教学工作情况';
	$array[0]['content'][0]['value']  = '教学工作量';
	$array[0]['content'][1]['value']  = '教学质量';
	$array[0]['content'][2]['value']  = '工作态度';
	echo '<pre>';

	foreach($array as $a){
		print_r($a);
	}