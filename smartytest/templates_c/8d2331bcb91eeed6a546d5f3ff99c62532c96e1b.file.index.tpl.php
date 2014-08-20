<?php /* Smarty version Smarty-3.1.19, created on 2014-07-25 11:14:24
         compiled from "/home/s3/test/smartytest/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29041998653d1c256960f15-64528370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d2331bcb91eeed6a546d5f3ff99c62532c96e1b' => 
    array (
      0 => '/home/s3/test/smartytest/templates/index.tpl',
      1 => 1406258061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29041998653d1c256960f15-64528370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53d1c256993635_38269162',
  'variables' => 
  array (
    'title' => 0,
    'coment' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d1c256993635_38269162')) {function content_53d1c256993635_38269162($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
    <body>
    	<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['coment']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
    	<li><?php echo $_smarty_tpl->tpl_vars['c']->value;?>
</li>
    	<?php } ?>
    	
    </body>
</html>
<?php }} ?>
