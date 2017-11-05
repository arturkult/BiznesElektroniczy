<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 12:39:14
         compiled from "D:\xampp\htdocs\ksiegarnia\admin924uxptek\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104918438659fef862d0a2c9-98838515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7f343c153c0caf76562ade69bae2da305833682' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\admin924uxptek\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1509797089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104918438659fef862d0a2c9-98838515',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fef862e1f795_41377915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fef862e1f795_41377915')) {function content_59fef862e1f795_41377915($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert("<?php echo smartyTranslate(array('s'=>'Before changing the default currency, we strongly recommend that you enable maintenance mode. Indeed, any change on the default currency requires a manual adjustment of the price of each product and its combinations.','d'=>'Admin.International.Notification','js'=>1),$_smarty_tpl);?>
");
		});
	});
</script>
<?php }} ?>
