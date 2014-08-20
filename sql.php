<?php 
         header("Content-type: text/html; charset=utf-8");
         $conn = mysql_connect('localhost','root','root');
         if (!$conn) {
         	echo 'canot open DB'.mysql_error();
         }
        mysql_query('set names utf8');
         mysql_select_db('test1',$conn);
         $sql = "SELECT e.`name`,e.`gender`,d.`name` AS department FROM employee AS e  LEFT JOIN department AS d ON e.department_id = d.id WHERE d.id = 2";
	//echo $sql;
         //mysql_query($sql);
        $sql2 = mysql_query($sql);
        //print_r($sql2);
         while ($row = mysql_fetch_array($sql2) ) {
         	$contents[] = $row;
         }
         mysql_close($conn);
       //  print_r($contents);
  $gender = array('0' => 'nv',
  		     '1' =>'nan');
         ?>
         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
         <html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
         <head>
         <title>新建网页</title>
         </head>
             <body>
             	<table border=1>
             		<tr>
             			<td>name</td>
     
             			<td>gender</td>
             		
             			<td>department</td>
             		</tr>
             		<?php 
             		foreach($contents as $c){                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
             		?>
             		<tr>
             			<td><?php echo $c['name']; ?></td>
     
             			<td><?php echo $gender[$c['gender']]; ?></td>
             		
             			<td><?php echo $c['department']; ?></td>
             		</tr>
             		<?php }?>
             	</table>
             </body>
         </html>