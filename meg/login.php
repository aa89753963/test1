<?php 
	include("conn.php");
	$pwd = $_POST['pwd'];
	$mpwd = md5($_POST['pwd']);
	$user = $_POST['user'];
	$sql = "SELECT user, row FROM user WHERE user = '$user' AND row = 1";
	$query = mysql_query($sql);
	$q = mysql_num_rows($query);
	if ($q) {
		$sql = "SELECT user, password FROM user WHERE user = '$user' AND password = '$mpwd'";
		$query = mysql_query($sql);
		$w = mysql_num_rows($query);
		if ($w) {
			$_SESSION['user'] = $user;
			header('location:sqlread.php');
			exit;
		}
	}else{
		$sql = "SELECT user, password FROM user WHERE user = '$user' AND password = '$mpwd'";
		$query = mysql_query($sql);
		$w = mysql_num_rows($query);
		if ($w) {
			$_SESSION['user'] = $user;
			echo "<script>alert('登录成功！请留言。');location.href='liuyan.html';</script>";
			}else{
			echo "<script>alert('用户名不存在或密码错误！请仔细检查。');location.href='index.html';</script>";
	}
		}
	/*
	$sql = "SELECT user,password FROM user WHERE user = '$user' AND password = '$mpwd'";
	$query = mysql_query($sql);
	$q = mysql_num_rows($query);
	$sql1 = "SELECT user, password, row FROM user WHERE user = '$user' AND password = '$mpwd' AND row = 1";
	$query1 = mysql_query($sql1);
	$w = mysql_num_rows($query1);	
	if ($w) {
		$_SESSION['user'] = $user;
		header('location:sqlread.php');
		exit;
		}	
	if($q){
		$_SESSION['user'] = $user;
		echo "<script>alert('登录成功！请留言。');location.href='liuyan.html';</script>";
	}else{
		echo "<script>alert('用户名不存在或密码错误！请仔细检查。');location.href='index.html';</script>";
	}
*/