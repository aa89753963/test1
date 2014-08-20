<?php 
	$a=array('a','b','c','b'=>'c','d');
	print_r($a);
	echo '<br />';
	$b=array('d','e');
	print_r($b);
	echo '<br />';
	$a[]=$b;
	print_r($a);
	
?>