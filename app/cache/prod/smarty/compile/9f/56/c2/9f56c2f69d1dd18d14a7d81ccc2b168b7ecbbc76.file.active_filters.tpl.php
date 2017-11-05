<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 19:46:34
         compiled from "D:\xampp\htdocs\ksiegarnia\themes\classic\templates\catalog\_partials\active_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16280821959fe0b0a44ceb3-68441019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f56c2f69d1dd18d14a7d81ccc2b168b7ecbbc76' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\themes\\classic\\templates\\catalog\\_partials\\active_filters.tpl',
      1 => 1509797094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16280821959fe0b0a44ceb3-68441019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeFilters' => 0,
    'filter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fe0b0a487775_52097169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fe0b0a487775_52097169')) {function content_59fe0b0a487775_52097169($_smarty_tpl) {?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
  
    <h1 class="h6 <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active-filter-title<?php } else { ?>hidden-xs-up<?php }?>"><?php echo smartyTranslate(array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl);?>
</h1>
  

  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
        
          <li class="filter-block">
            <?php echo smartyTranslate(array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl);?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a>
          </li>
        
      <?php } ?>
    </ul>
  <?php }?>
</section>
<?php }} ?>
