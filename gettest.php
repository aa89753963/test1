<?php 
	header("Content-type: text/html; charset=utf-8");
	$array = array('name' => @$_GET['name'],
			'nicheng' => @$_GET['nicheng'],
			'pwd' => @$_GET['pwd'],
			'sex' => @$_GET['sex'],
			'job' => @$_GET['job'],
			'keywords' => @$_GET['keywords'],
			'content' => @$_GET['content'],
		);
	$keywords = $array['keywords'];
		//print_r($keywords);
		//echo '<pre>';
		//print_r($array);
		//echo $array['content'];
		echo '<table border="1" align="center" width="600" >';
		echo '<caption>中文版自我介绍</caption>';
		echo '<tr>';
		echo '<th>name:</th>';
		echo '<td>'.@$array['name'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>nicheng:</th>';
		echo '<td>'.@$array['nicheng'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>password:</th>';
		echo '<td>'.@$array['pwd'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>sex:</th>';
		echo '<td>'.@$array['sex'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>job:</th>';
		echo '<td>'.@$array['job'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>keywords:</th>';
		echo '<td>'.$keywords['0'].'&nbsp'.@$keywords['1'].'&nbsp'.@$keywords['2'].'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<th>content:</th>';
		echo '<td>'.nl2br($array['content']).'</td>';
		echo '</tr>';
		echo '</table>';
		

	



?>