<?php 
    header("Content-type: text/html; charset=utf-8");
    $arr = $_POST;
    //echo '<pre>';
   //print_r($arr);
    $time = time();
    mysql_connect('localhost', 'root', 'root');
    mysql_query("SET NAMES utf8");
    mysql_select_db('test');
    $sql = "INSERT INTO `news` (`id`, `title`, `comment`, `date`) VALUES (NULL, '" . $arr ['title'] ."' , '" .$arr['content'] ."' ,$time)";
    //echo $sql;
    mysql_query($sql);
