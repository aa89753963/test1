<?php 
	define('SMARTY_DIR', '/home/s3/test/smarty/libs/');
	include(SMARTY_DIR.'Smarty.class.php');
	
	$smarty =new Smarty();
	$smarty->setTemplateDir(SMARTY_DIR."../../smartytest/templates");
	$smarty->setCompileDir(SMARTY_DIR."../../smartytest/templates_c");
	$smarty->setCacheDir(SMARTY_DIR."../../smartytest/cache");
	//$smarty->setConfig_Dir("../../config");


	$array = array('name' => 'zhangsan','sex' => 'nan','age' => '18');
	$smarty->assign("title","Smarty 测试");
	$smarty->assign("coment",$array);
	$smarty->display('index.tpl');
	?>