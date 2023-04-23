<?php
/* Smarty version 4.3.0, created on 2023-04-22 18:08:07
  from 'D:\xammp\htdocs\04 smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64440667d52ba2_41672427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ab15d8ec6cac3a84ec8f1e7ba852b6d7b9a039c' => 
    array (
      0 => 'D:\\xammp\\htdocs\\04 smarty\\app\\calc.html',
      1 => 1682178288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64440667d52ba2_41672427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6349269864440667d3aa21_74294553', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53390974464440667d3b654_91717363', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_6349269864440667d3aa21_74294553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_6349269864440667d3aa21_74294553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_53390974464440667d3b654_91717363 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53390974464440667d3b654_91717363',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class= "bg-white">
<h2 class="col-md-8 content-head is-center">Oblicz wysokość raty</h2>


<div class="col-md-8 offset-md-2 contact-form-holder mt-2 bg-white boxed-page container ">
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="get" class="pure-form pure-form-stacked">
	<div class="row">
		<div class="col-md-6 form-input">
		<label for="x">Kwota</label>
		<input id="x" type="text" placeholder="PLN" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
">
		</div>
		<div class="col-md-6 form-input">
		<label for="y">Okres spłaty</label>
		<input id="y" type="text" placeholder="Lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
">
		</div>
		<div class="col-md-6 form-input">
		<label for="z">Oprocentowanie</label>		
		<input id="z" type="text" placeholder="%" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
">

		</div>
		<div class="col-md-9 form-btn text-center">
		<button class="btn btn-block btn-secondary btn-red" type="submit" name="submit">Oblicz</button>
		<br>
		</div>
		
	</div>
</form>	
<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<br>
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
	<?php }
}?>



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
			<br>
	<?php }
}?>


<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?> 
	<h4>Rata wyniesie</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
	<br>
<?php }?>
</div>
</div>



</div>
</div>
</div>
<?php
}
}
/* {/block 'content'} */
}
