<?php
/* Smarty version 3.1.30, created on 2021-05-17 18:31:03
  from "C:\xampp\htdocs\github\JPDSI\Kalkulator__08\app\views\Result.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_60a29a47db01d4_53644952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c68d3b226168f08bd16e05451bf605ee53e81770' => 
    array (
      0 => 'C:\\xampp\\htdocs\\github\\JPDSI\\Kalkulator__08\\app\\views\\Result.tpl',
      1 => 1621269004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
  ),
),false)) {
function content_60a29a47db01d4_53644952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111299076360a29a47dafcc6_61272107', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_111299076360a29a47dafcc6_61272107 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<body class="lista">
    <div class="bottom-margin">
        <a class="pure-button button-success" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcShow">Powrót</a>
    </div>

    <div class="tablebox">
    <table id="tab_list" class="pure-table pure-table-bordered">
        <thead>
        <tr>
            <th>Kwota kredytu</th>
            <th>Lata spłaty</th>
            <th>Oprocentowanie</th>
            <th>Miesięczna rata</th>
            <th>Data obliczeń</th>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wyniki']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["kw"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["ll"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["op"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["rata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["DATA"];?>
</td></tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody>
    </table>
    </div>
</body>
<?php
}
}
/* {/block 'content'} */
}
