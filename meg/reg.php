<?php 
	include("conn.php");
	$name = $_POST['user'];
	$pwd   = $_POST['pwd'];
	$email = $_POST['email'];
	$mpwd = md5($pwd);
	$sql1 = "SELECT user FROM user WHERE user = '$name'";
	$s = mysql_query($sql1);
	$d = mysql_num_rows($s);
	if ($d > 0) {
		echo "<script>alert('用户名已存在，请重新注册。');location.href='reg.html';</script>";
		exit;
	}
	$sql = "INSERT INTO user (`user` ,`password` ,`email`) VALUES ('$name' ,'$mpwd' ,'$email')";
	$q = mysql_query($sql);
	if ($q) {
		echo "<script>alert('注册成功！请留言。');location.href='liuyan.html';</script>";
	}

