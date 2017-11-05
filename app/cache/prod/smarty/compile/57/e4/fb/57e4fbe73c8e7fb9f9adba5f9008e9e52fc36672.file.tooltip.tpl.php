<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 19:33:24
         compiled from "D:\xampp\htdocs\ksiegarnia\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84921142759fe07f4d7dca4-77990330%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57e4fbe73c8e7fb9f9adba5f9008e9e52fc36672' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1509797093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84921142759fe07f4d7dca4-77990330',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fe07f4d98a77_86456612',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fe07f4d98a77_86456612')) {function content_59fe07f4d98a77_86456612($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
