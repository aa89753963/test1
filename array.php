<?php 
	$lisi = array('name' => 'lisi',
		        'sex'    =>'nan',
		        'age'   =>18
		);
	$wangwu = array('name' => 'wangwu',
			     'sex'    =>'nv',
			     'age'    =>16
		);
	$zhangsan = array('name' => 'zhangsan',
			     'sex'    =>'nv',
			     'age'    =>16
		);
	$array = array('user1' => $lisi,
			'aa'      => $wangwu,
			'bb'      => $zhangsan
		);
	echo '<pre>';
	foreach($array as $key => $a){
		echo $key.'<br />';
		echo $a['name'].'<br />';

	}