<?php
/* Smarty version 4.3.0, created on 2023-04-22 18:08:07
  from 'D:\xammp\htdocs\04 smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64440667e80cf0_78679156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '999d109d9f49e3aa6078cbb639d2f6bd0b8abecc' => 
    array (
      0 => 'D:\\xammp\\htdocs\\04 smarty\\templates\\main.html',
      1 => 1682179607,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64440667e80cf0_78679156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
">
	
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>	
	
	<!--
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

	-->
	<link rel="stylesheet" href="../css/szablon.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
	
</head>
<body>
    <div class="container">
        <div class="collapse navbar-collapse" id="navbar-nav-header">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Góra strony</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#app_content">Kalkulator</a>
                </li>				
			</ul>
		</div>
	</div>

<!-- zdjecie z napisem-->
<div class="splash">
  
    <h1><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h1>
	<h6><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_description']->value ?? null)===null||$tmp==='' ? "Opis domyślny" ?? null : $tmp);?>
</h6>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary " >Idź do formularza</a>
        </p>	
</div>

<div id="app_content" class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118149712764440667e7fe10_92794463', 'content');
?>


</div>

<!-- !!!!!!!!!!footer -->
<footer class="mastfoot mb-3 bg-white py-4 border-top">
    <div class="inner container">
         <div class="row">
         	<div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
				<p>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25405286164440667e805b4_83402933', 'footer');
?>

				</p>			
         		<p class="mb-0">Autor przykładu Błażej Klimas. Widok oparty na stylu Marketing. <a href="https://gettemplates.co" target="_blank">GetTemplates.co</a>.</p>
         	</div>
		</div>
	</div>
</footer>

	<!-- External JS -->
	<?php echo '<script'; ?>
 type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/bootstrap/popper.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/select2/select2.min.js "><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/owlcarousel/owl.carousel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/isotope/isotope.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/lightcase/lightcase.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/waypoints/waypoint.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="vendor/countTo/jquery.countTo.js"><?php echo '</script'; ?>
>

	<!-- Main JS -->
	<?php echo '<script'; ?>
 src="js/app.min.js "><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//localhost:35729/livereload.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_118149712764440667e7fe10_92794463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_118149712764440667e7fe10_92794463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_25405286164440667e805b4_83402933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_25405286164440667e805b4_83402933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
