<?php
/* Smarty version 3.1.39, created on 2021-03-29 17:15:51
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt5_kontroler_glowny\app\calc\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6061ef27524402_18179584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '372d07ca90323cb1e4df3756d308185c91396cce' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt5_kontroler_glowny\\app\\calc\\calc_view.tpl',
      1 => 1617030946,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6061ef27524402_18179584 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6443043646061ef27519c73_89486525', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_6443043646061ef27519c73_89486525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6443043646061ef27519c73_89486525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <div class="box">
	<div class="content">
            <h2 class="align-center">Oblicz rezystor</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->v1;?>
">
		</div>
		<div class="field half">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->v2;?>
">
		</div>
		<div class="field half first">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amp;?>
">
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz wartość rezystora" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<div style="width:90%; margin: 2em auto;">
                    
<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value->getErrors(), 'err');
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

<?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value->getInfos(), 'inf');
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

<?php if ((isset($_smarty_tpl->tpl_vars['resistor']->value->resistor))) {?>
	<h4>Wynik:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['resistor']->value->resistor;?>
 Ohm
	</p>
<?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
