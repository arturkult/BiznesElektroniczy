<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 19:45:47
         compiled from "D:\xampp\htdocs\ksiegarnia\admin924uxptek\themes\default\template\helpers\tree\tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52966650959fe0adb734d02-16259282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f0e95752b915a166dd5e85f6575bb7b4289d194' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\admin924uxptek\\themes\\default\\template\\helpers\\tree\\tree_toolbar.tpl',
      1 => 1509797089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52966650959fe0adb734d02-16259282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fe0adb80e711_65949468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fe0adb80e711_65949468')) {function content_59fe0adb80e711_65949468($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div>
<?php }} ?>
