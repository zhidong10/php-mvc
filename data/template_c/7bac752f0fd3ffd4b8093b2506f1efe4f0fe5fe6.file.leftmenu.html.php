<?php /* Smarty version Smarty-3.1.16, created on 2016-02-16 08:39:39
         compiled from "tpl\admin\leftmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:1398955cda3cbc90784-52962265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bac752f0fd3ffd4b8093b2506f1efe4f0fe5fe6' => 
    array (
      0 => 'tpl\\admin\\leftmenu.html',
      1 => 1439649639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1398955cda3cbc90784-52962265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55cda3cbc92023_32723489',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55cda3cbc92023_32723489')) {function content_55cda3cbc92023_32723489($_smarty_tpl) {?><aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?controller=admin&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="admin.php?controller=admin&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?controller=admin&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }} ?>
