<?php 
	include("conn.php");
    include ("class.db.php");
    $meg = new Db();
    $meg->name = $_POST['name'];
    $meg->summaty = $_POST['summaary'];
    $meg->insert();
    $meg->selectAll();

	if ($meg) {
		echo "<script>alert('提交成功！返回首页。');location.href='liuyan.html';</script>";
	}
	
	

?>
<form action="" method="post" align="center">
    		<p>留言标题:<input type="text" name="title" /></p>
    		<p>留言内容:<textarea cols="50" rows="10" id="contactus" name="summary"></textarea>
    			<input type="submit" value="提交">
    			<p><a href="read.php" />查看留言</p>


    	</form>