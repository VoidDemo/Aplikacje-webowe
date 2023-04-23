<?php
/* Smarty version 4.3.0, created on 2023-04-23 18:46:04
  from 'D:\xammp\htdocs\05-obiektowy\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_644560cc5f0780_42895462',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fea026e088ac3081a1b5a1c460ce313f9d4d372f' => 
    array (
      0 => 'D:\\xammp\\htdocs\\05-obiektowy\\templates\\main.html',
      1 => 1682256064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644560cc5f0780_42895462 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
	
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>	
	
	
	<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style_hide_intro.css">
	<?php }?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/js/softscroll.js"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" >
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
 /vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
 /vendor/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
 /vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
 /vendor/lightcase/lightcase.css">
    <link rel="stylesheet" href="/css/pure/pure-min.css">
    <link rel="stylesheet" href="/css/pure/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/szablon.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
	
</head>
<body>
    <div id="top" class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Your Site</a>

        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected"><a href="#app_content" class="pure-menu-link">Kalkulator</a></li>
            <li class="pure-menu-item"><a href="#top" class="pure-menu-link">Do góry</a></li>
            <li class="pure-menu-item"><a href="https://kakadu.pl/blog/wp-content/uploads/2014/06/pielegnacja-i-zywienie-kotki-w-ciazy.jpg" target="_blank" class="pure-menu-link">Obrazek</a></li>
        </ul>
    </div>
</div>
<!-- zdjecie z napisem-->
    <div class="splashC">
            <div class="splash">
                <h1 class="splash-head"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
                <h6 class="splash-subhead"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</h6>
                    <p>
                        <a href="#app_content" class="pure-button pure-button-primary " >Idź do formularza</a>
                    </p>	
            </div>
    </div>
    
    
    <div class="content-wrapper">
        <div class="content">
            <h2 class="content-head is-center">Prosty kalkulator kredytowy.</h2>

            <div class="pure-g">
                <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                    <h3 class="content-subhead">
                        <i class="fa fa-rocket"></i>
                        Możesz obliczyć swój kredyt!
                    </h3>
                    <p>
                        Nazwa chyba mówi sama za siebie, więc nie ma co opisywać
                    </p>
                </div>
                
            </div>
        </div>
        
        
        <div id="app_content" class="content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229579231644560cc5ef7b0_10424744', 'content');
?>


        </div>
    </div>

    <!-- !!!!!!!!!!footer -->
    <footer class="footer l-box is-center">
            <p>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1203717936644560cc5effa0_52855467', 'footer');
?>

            </p>			
            <p class="">Autor przykładu Błażej Klimas. Widok oparty na stylu Marketing. <a href="https://gettemplates.co" target="_blank">GetTemplates.co</a>.</p>
    </footer>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_229579231644560cc5ef7b0_10424744 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_229579231644560cc5ef7b0_10424744',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1203717936644560cc5effa0_52855467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1203717936644560cc5effa0_52855467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
