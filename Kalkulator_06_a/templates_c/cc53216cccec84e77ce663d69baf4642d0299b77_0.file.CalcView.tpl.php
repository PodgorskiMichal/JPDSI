<?php
/* Smarty version 3.1.39, created on 2021-04-22 02:13:30
  from 'C:\xampp\htdocs\github\JPDSI\Kalkulator_06_a\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6080bfaa1cab95_38291571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc53216cccec84e77ce663d69baf4642d0299b77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\github\\JPDSI\\Kalkulator_06_a\\app\\views\\CalcView.tpl',
      1 => 1618928494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6080bfaa1cab95_38291571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12446308526080bfaa1bf636_60865870', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2113500336080bfaa1bfe74_46816462', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_12446308526080bfaa1bf636_60865870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_12446308526080bfaa1bf636_60865870',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2113500336080bfaa1bfe74_46816462 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2113500336080bfaa1bfe74_46816462',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post"">
            <fieldset class="lol">

                <label for="id_kw">Kwota: </label>
                <input id="id_kw" class="ip" type="text" name="kw" style="width: 9em" placeholder="Kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kw;?>
">

                <label for="id_ll">Liczba lat: </label>
                <input id="id_x" type="text" name="ll" style="width: 9em" placeholder="Liczba lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ll;?>
">

                <label for="id_op">Oprocentowanie: </label>

                <select id="id_op" name="op" style="width: 9em">

                    <option value="0">0%</option>
                    <option value="1">1%</option>
                    <option value="2">2%</option>
                    <option value="3">3%</option>
                    <option value="4">4%</option>
                    <option value="5">5%</option>

                </select>

                <button type="submit" class="pure-button pure-button-primary" >Oblicz</button>
            </fieldset>
        </form>
    </div>

<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
            <h4>Informacje: </h4>
            <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
        <h4>Wynik</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

        </p>
    <?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
