<?php
/* Smarty version 3.1.39, created on 2021-03-23 01:51:52
  from 'C:\xampp\htdocs\github\JPDSI\Kalkulator_03_a\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60593ba8ea9d93_27232852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '170032a05d33461267810e7a2942e8ba97b5b966' => 
    array (
      0 => 'C:\\xampp\\htdocs\\github\\JPDSI\\Kalkulator_03_a\\app\\calc.tpl',
      1 => 1616379405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60593ba8ea9d93_27232852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77605117360593ba8e99106_48641655', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205580540260593ba8e99d58_37636286', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_77605117360593ba8e99106_48641655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_77605117360593ba8e99106_48641655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Przykładowa stopka<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_205580540260593ba8e99d58_37636286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_205580540260593ba8e99d58_37636286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post"">
            <fieldset class="lol">

                <label for="id_kw">Kwota: </label>
                <input id="id_kw" class="ip" type="text" name="kw" style="width: 9em" placeholder="Kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kw'];?>
">

                <label for="id_ll">Liczba lat: </label>
                <input id="id_x" type="text" name="ll" style="width: 9em" placeholder="Liczba lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['ll'];?>
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

        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>
    <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
        <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
            <h4>Informacje: </h4>
            <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <h4>Wynik</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

        </p>
    <?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
