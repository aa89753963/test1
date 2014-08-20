<?php 
	header("Content-type: text/html; charset=utf-8");
	$conn = mysql_connect('localhost','root','root') or die ('Can not open DB'.mysql_close());
	mysql_query('set names utf8');
	mysql_select_db('test',$conn) or die ('Can not use test'.mysql_error());









