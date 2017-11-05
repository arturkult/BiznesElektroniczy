<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 19:43:57
         compiled from "D:\xampp\htdocs\ksiegarnia\admin924uxptek\themes\default\template\controllers\stats\stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81272254059fe0a6d6b3bc3-49182552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b744f20d12f125df8e7f0b3d1a5f494fda5001' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\admin924uxptek\\themes\\default\\template\\controllers\\stats\\stats.tpl',
      1 => 1509797089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81272254059fe0a6d6b3bc3-49182552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fe0a6d6d28b5_34549454',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fe0a6d6d28b5_34549454')) {function content_59fe0a6d6d28b5_34549454($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
