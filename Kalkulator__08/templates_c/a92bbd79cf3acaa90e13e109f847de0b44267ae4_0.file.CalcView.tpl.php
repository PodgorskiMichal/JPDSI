<?php
/* Smarty version 3.1.30, created on 2021-05-17 18:07:14
  from "C:\xampp\htdocs\github\JPDSI\Kalkulator__08\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60a294b259a1a0_56496645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a92bbd79cf3acaa90e13e109f847de0b44267ae4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\github\\JPDSI\\Kalkulator__08\\app\\views\\CalcView.tpl',
      1 => 1620736443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60a294b259a1a0_56496645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88366442860a294b2599781_26708145', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_88366442860a294b2599781_26708145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<div class="pure-menu pure-menu-horizontal bottom-margin ">

	</div>


	<body class="calc">
	<div class="calcbox"	>
		<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">

			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading">wyloguj</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
result"  class="pure-menu-heading">Lista</a>
			<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
			<legend>Kalkulator</legend>

			<fieldset>


				<p>Kwota: </p>
				<input id="id_kw" type="text" name="kw"  placeholder="Wprowadź kwotę" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kw;?>
" />


				<label for="id_ll">Liczba lat: </label>
				<input id="id_x" type="text" name="ll"  placeholder="Liczba lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ll;?>
" />



				<label for="id_op">Oprocentowanie: </label>

				<select id="id_op" name="op" >
					<?php if ($_smarty_tpl->tpl_vars['user']->value->role == "admin") {?>
						<option value="0">0%</option>
					<?php }?>
					<option value="1">1%</option>
					<option value="2">2%</option>
					<option value="3">3%</option>
					<option value="4">4%</option>
					<option value="5">5%</option>
				</select>

				<input type="submit" value="Oblicz" class="pure-button pure-button-primary"/>

			</fieldset>
			<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
				<div class="result">
					Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

				</div>
			<?php }?>
		</form>

	</div>

	<div class="msgbox">
		<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	</div>


	</body>





<?php
}
}
/* {/block 'content'} */
}
