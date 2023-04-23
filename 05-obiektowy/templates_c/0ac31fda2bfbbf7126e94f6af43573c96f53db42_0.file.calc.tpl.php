<?php
/* Smarty version 4.3.0, created on 2023-04-23 18:53:01
  from 'D:\xammp\htdocs\05-obiektowy\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6445626dd51830_85197093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ac31fda2bfbbf7126e94f6af43573c96f53db42' => 
    array (
      0 => 'D:\\xammp\\htdocs\\05-obiektowy\\app\\calc.tpl',
      1 => 1682268745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6445626dd51830_85197093 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7320220416445626dd3ed52_58025089', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18727433416445626dd3f7c9_99766626', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_7320220416445626dd3ed52_58025089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_7320220416445626dd3ed52_58025089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_18727433416445626dd3f7c9_99766626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18727433416445626dd3f7c9_99766626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<div class= "bg-white">
<h2 class="col-md-8 content-head is-center">Oblicz wysokość raty</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="get" class="pure-form pure-form-stacked">
            
                <div class="col-md-6 form-input">
                <label for="x">Kwota</label>
                <input id="x" type="text" placeholder="PLN" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
                </div>
                <div class="col-md-6 form-input">
                <label for="y">Okres spłaty</label>
                <input id="y" type="text" placeholder="Lata" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
                </div>
                <div class="col-md-6 form-input">
                <label for="z">Oprocentowanie</label>		
                <input id="z" type="text" placeholder="%" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
">

                </div>
                
                <button class="pure-button" type="submit" name="submit">Oblicz</button>
                <br>
                


        </form>	
    </div>
</div>
    <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <br>
            <h4>Wystąpiły błędy: </h4>
            <ol style="padding: 1em 1em 1em 3em; border-radius: 1em; background-color: #f55; color: #222; width: 22%">
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
        <?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
        <h4>Informacje: </h4>
        <ol style="padding: 1em 1em 1em 3em; border-radius: 1em; background-color: #8f8; color: #222; width: 22%">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'msg');
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
    <?php if ((($_smarty_tpl->tpl_vars['res']->value->{$_smarty_tpl->tpl_vars['result']->value} !== null ))) {?> 
        <h4>Rata wyniesie</h4>
        <p style="padding: 1em 1em 1em 1em;
	border-radius: 1em;
	background-color: #1f8dd6;
	color: #222;"> 
        <?php echo $_smarty_tpl->tpl_vars['res']->value->{$_smarty_tpl->tpl_vars['result']->value};?>
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
