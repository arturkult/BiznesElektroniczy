<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 08:39:40
         compiled from "module:ps_contactinfo/ps_contactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5871155159fd6ebc400f68-18885020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:ps_contactinfo/ps_contactinfo.tpl',
      1 => 1503921076,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5871155159fd6ebc400f68-18885020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contact_infos' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fd6ebc40ca71_78587563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fd6ebc40ca71_78587563')) {function content_59fd6ebc40ca71_78587563($_smarty_tpl) {?>

<div class="block-contact col-md-4 links wrapper">
  <div class="hidden-sm-down">
    <h4 class="text-uppercase block-contact-title"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h4>
      <?php echo $_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted'];?>

      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
        <br>
        
        <?php echo smartyTranslate(array('s'=>'Call us: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
        <br>
        
        <?php echo smartyTranslate(array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
        <br>
        
        <?php echo smartyTranslate(array('s'=>'Email us: [1]%email%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl);?>

      <?php }?>
  </div>
  <div class="hidden-md-up">
    <div class="title">
      <a class="h3" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</a>
    </div>
  </div>
</div>
<?php }} ?>
