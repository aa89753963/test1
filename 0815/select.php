<?php
    header("Content-type: text/html; charset=utf-8"); 
    $conn = mysql_connect('127.0.0.1','root','root') or die(mysql_error());
    mysql_query("set names utf8");
    mysql_query("use test",$conn);   
    $name = $_GET['name'];
    $sql = "SELECT * FROM user WHERE user='".$name."'";
  //  print_r($sql);
    $sql1 = mysql_query($sql);
    //var_dump($sql1);exit;
    $sql2 = mysql_num_rows($sql1);
    if ($sql2 == 0) {
        echo '注册成功';
    }else{
        echo '用户名存在';
    }
exit;
    ?>
