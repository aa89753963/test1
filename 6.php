<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
    <body>
    	<form method="post" action="">
    		<input type="text" name="D_name" />name<br />
    		<input type="text" name="D_email" />email<br />
    		<input type="text" name="D_phone" />phone<br />
    		<input type="text" name="D_country" />Country<br />
    		sex<input type="radio" name="D_sex"  value="nan"/>nan
    		<input type="radio" name="D_sex"  value="nv"/>nv
    		<input type="checkbox" name="D_hobby[]" value="football">football
    		<input type="checkbox" name="D_hobby[]" value="swimming">swimming
    		<input type="checkbox" name="D_hobby[]" value="pingpangqiu">pingpangqiu
    		<input type="submit" name="D_submit" value="tijiao">
    		<?php 
    		echo "<pre />";
    		$name=$_POST['D_name'];
    		echo $name."<br />";
    		$email=$_POST['D_email'];
    		echo $email."<br />";
    		$phone=$_POST['D_phone'];
    		echo $phone."<br />";
    		$country=$_POST['D_country'];
    		echo $country."<br />";
    		$sex=$_POST['D_sex'];
    		echo $sex."<br />";
    		$hobby=$_POST['D_hobby'];
    		print_r($hobby);
    		

    		?>



    	</form>
    </body>
</html>