<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 12:39:48
         compiled from "D:\xampp\htdocs\ksiegarnia\admin924uxptek\themes\default\template\controllers\currencies\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134174053659fef8840de2d9-04854237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa39f056b72ef6034d02e7d9d3db52c2d144adb7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\admin924uxptek\\themes\\default\\template\\controllers\\currencies\\content.tpl',
      1 => 1509797089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134174053659fef8840de2d9-04854237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'isForm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fef884182667_70745662',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fef884182667_70745662')) {function content_59fef884182667_70745662($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-10 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
	<div class="col-lg-2 col-xs-12">
		<?php if (isset($_smarty_tpl->tpl_vars['isForm']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/status.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/currencies/conversion_rate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	</div>
</div>
<?php }} ?>
