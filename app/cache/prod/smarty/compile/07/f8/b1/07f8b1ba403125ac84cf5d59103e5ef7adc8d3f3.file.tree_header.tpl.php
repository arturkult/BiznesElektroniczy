<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 19:45:47
         compiled from "D:\xampp\htdocs\ksiegarnia\admin924uxptek\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181239932059fe0adb922071-75566166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07f8b1ba403125ac84cf5d59103e5ef7adc8d3f3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\admin924uxptek\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1509797089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181239932059fe0adb922071-75566166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fe0adb961509_45466007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fe0adb961509_45466007')) {function content_59fe0adb961509_45466007($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>
