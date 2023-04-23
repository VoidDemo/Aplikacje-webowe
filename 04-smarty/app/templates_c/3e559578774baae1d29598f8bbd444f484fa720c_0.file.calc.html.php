<?php
/* Smarty version 4.3.0, created on 2023-04-23 15:42:38
  from 'D:\xammp\htdocs\4-smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644535ce266a16_88191594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e559578774baae1d29598f8bbd444f484fa720c' => 
    array (
      0 => 'D:\\xammp\\htdocs\\4-smarty\\app\\calc.html',
      1 => 1682257356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644535ce266a16_88191594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1973872339644535ce252496_98208999', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1744790087644535ce253048_37806672', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1973872339644535ce252496_98208999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1973872339644535ce252496_98208999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1744790087644535ce253048_37806672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1744790087644535ce253048_37806672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class= "bg-white">
<h2 class="col-md-8 content-head is-center">Oblicz wysokość raty</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
        <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="get" class="pure-form pure-form-stacked">
            
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
                <button class="pure-button" type="submit" name="submit">Oblicz</button>
                <br>
                </div>


        </form>	
    </div>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
            <br>
            <h4>Wystąpiły błędy: </h4>
            <ol style="padding: 1em 1em 1em 3em; border-radius: 1em; background-color: #f55; color: #222; width: 22%">
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
        <ol style="padding: 1em 1em 1em 3em; border-radius: 1em; background-color: #8f8; color: #222; width: 22%">
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
        <?php }?>
    <?php }?>
<div class="pure-g"> 
    <div >
    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?> 
        <h4>Rata wyniesie</h4>
        <p style="padding: 1em 1em 1em 1em;
	border-radius: 1em;
	background-color: #1f8dd6;
	color: #222;"> 
        <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 PLN
        </p>
        <br>
    <?php }?>
    </div>
</div>
<br>


<?php
}
}
/* {/block 'content'} */
}
