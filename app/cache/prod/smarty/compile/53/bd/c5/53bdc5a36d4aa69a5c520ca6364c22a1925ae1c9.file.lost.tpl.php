<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 19:33:24
         compiled from "D:\xampp\htdocs\ksiegarnia\modules\welcome\views\templates\lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184767623059fe07f4c94532-87648694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53bdc5a36d4aa69a5c520ca6364c22a1925ae1c9' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\modules\\welcome\\views\\templates\\lost.tpl',
      1 => 1509797093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184767623059fe07f4c94532-87648694',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fe07f4caf156_11166226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fe07f4caf156_11166226')) {function content_59fe07f4caf156_11166226($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>
