<?php
/* Smarty version 3.1.30, created on 2021-05-10 00:38:56
  from "C:\xampp\htdocs\github\JPDSI\Kalkulator__07_a\app\views\LoginView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_609864805c7722_71043939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc5702c32c9e384bed3d174774100bc199a058f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\github\\JPDSI\\Kalkulator__07_a\\app\\views\\LoginView.tpl',
      1 => 1620576525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_609864805c7722_71043939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1681982433609864805c73a4_52673340', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1681982433609864805c73a4_52673340 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<body class="login">
	<div class="loginbox">
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  >

			<h1 class="login">Login Here</h1>
			<form>
				<p>login: </p>
				<input id="id_login" type="text" placeholder="Enter Login" name="login"/>

				<p>pass: </p>
				<input id="id_pass" type="password" placeholder="Enter Password" name="pass" /><br />

				<input type="submit" value="Login"/>

			</form>
		</form>
	</div>
	<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</body>


<?php
}
}
/* {/block 'content'} */
}
