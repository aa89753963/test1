<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content=" " />
</head>
    <body>
    	<form method="post" action="">
    		user:<input type="text" name="username" /><br />
    		password:<input type="password" name="userpass" /><br />
    		<input type="submit" value="提交">

    		<?php 
    			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    				
    			
    			$name = $_POST['username'];
    			$pwd   = $_POST['userpass'];
    			$file_path = '1.txt';
    			$file= file($file_path);
    			$existuser=false;
    			foreach ($file as $f) {
    				$array = explode('|', $f);
    				//print_r($array);
    				$user['name'] = $array[0];
    				$user['pwd'] = $array[1];
    				$users[] = $user;
    				//print_r($users);

    			}
    			foreach ($users as $user) {
    				$userpwd = trim($user['pwd']);
    				if (($user['name'] == $name) && ($userpwd == $pwd)) {
    					$existuser = true;
    					break;
    				}
    				
    				}
    			
    			if ($existuser) {
    				echo 'cunzai';
    			}else{
    				echo 'bucunzai';
    			}
    		}
    		?>

    	</form>
    </body>
</html>