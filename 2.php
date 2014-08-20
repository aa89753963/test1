<?php 

$a='a';
$b='b';
$a=$b;
echo 'a= '. $a;
$b='c';
echo '<br>';
echo 'a= '. $a;
echo '<br />';
$c=&$b;
echo 'c= '. $c;
$b='d';
echo '<br />';
echo 'c= '. $c;
?>