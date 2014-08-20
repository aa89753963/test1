<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
</head>
    <body>
    	<form method="post" action="">
    		<div class="formitem">
    			<input id="name" type="text" name="EDIT_name" />
    			<input type="checkbox" name="aihao[]" value="football">football
    			<input type="checkbox" name="aihao[]" value="pingping">pingping
    			<input type="checkbox" name="aihao[]" value="kkkkkk">kkkkk
    			<input type="submit" name="EDIT_submit" value="submit" />

    		<?php 
    		/*echo "<pre>";
    		print_r($_SERVER);exit;
    		*/

    		$name=$_POST['aihao'];
    		/*echo $_SERVER[$name];
    		exit;
    		*/
    		print_r($name);
    		
    		
    		
    		?>

    	</form>
    </body>
</html>