<?php /* Smarty version Smarty-3.1.19, created on 2017-11-05 12:40:24
         compiled from "D:\xampp\htdocs\ksiegarnia\admin924uxptek\themes\default\template\controllers\access\helpers\form\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151601775459fef8a8d219d1-14398674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d48c9f5c3aa28e5d745cd2ad5231233fe88b16d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\admin924uxptek\\themes\\default\\template\\controllers\\access\\helpers\\form\\form.tpl',
      1 => 1509797089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151601775459fef8a8d219d1-14398674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_tab_parentmodule' => 0,
    'id_tab_module' => 0,
    'link' => 0,
    'show_toolbar' => 0,
    'toolbar_btn' => 0,
    'toolbar_scroll' => 0,
    'title' => 0,
    'profiles' => 0,
    'profile' => 0,
    'current_profile' => 0,
    'current' => 0,
    'token' => 0,
    'table' => 0,
    'submit_action' => 0,
    'form_id' => 0,
    'identifier' => 0,
    'tabs' => 0,
    'tab' => 0,
    'tabsize' => 0,
    'admin_profile' => 0,
    'accesses' => 0,
    'perms' => 0,
    'perm' => 0,
    'id_perms' => 0,
    'access_edit' => 0,
    'employee_profile_id' => 0,
    'id_perm' => 0,
    'access' => 0,
    'result_accesses' => 0,
    'has_all_rights' => 0,
    'child' => 0,
    'subChild' => 0,
    'subsubChild' => 0,
    'enable_bulk_view' => 0,
    'enable_bulk_add' => 0,
    'enable_bulk_edit' => 0,
    'enable_bulk_delete' => 0,
    'enable_bulk_all' => 0,
    'modules' => 0,
    'module' => 0,
    'k' => 0,
    'enable_bulk_configure' => 0,
    'enable_bulk_uninstall' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fef8a905b190_68468314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fef8a905b190_68468314')) {function content_59fef8a905b190_68468314($_smarty_tpl) {?>
<script type="text/javascript">
   $(document).ready(function() {
      var id_tab_parentmodule = <?php echo intval($_smarty_tpl->tpl_vars['id_tab_parentmodule']->value);?>
;
      var id_tab_module = <?php echo intval($_smarty_tpl->tpl_vars['id_tab_module']->value);?>
;
      $('tr.child-'+id_tab_parentmodule+' > td > input.view.'+id_tab_module).change( function () {
         if (!$(this).prop('checked'))
         {
            $('#table_module_2 thead th:eq(1) input').trigger('click');
            if ($('#table_module_2 thead th:eq(1) input').prop('checked'))
               $('#table_module_2 thead th:eq(1) input').trigger('click');
         }
      });
      $('tr.child-'+id_tab_parentmodule+' > td > input.edit.'+id_tab_module).change( function () {
         if (!$(this).prop('checked'))
         {
            $('#table_module_2 thead th:eq(2) input').trigger('click');
            if ($('#table_module_2 thead th:eq(2) input').prop('checked'))
               $('#table_module_2 thead th:eq(2) input').trigger('click');
         }
      });

      $('div.productTabs').find('a').each(function() {
         $(this).attr('href', '#');
      });
      $('div.productTabs a').click(function() {
         var id = $(this).attr('id');
         $('.nav-profile').removeClass('selected');
         $(this).addClass('selected active');
         $(this).siblings().removeClass('active');
         $('.tab-profile').hide()
         $('.'+id).show();
      });
      function getChildren(table, perm, parent, rel) {
         var kids = document.querySelectorAll(table+" [data-parent='"+parent+"'][data-type='"+perm+"']:not([data-rel='"+rel+"'])");
         for(var i=0; i<kids.length;i++)
         {
            if(kids[i].checked) {
               return true;
            }
         }
         return false;
      }
      $('.ajaxPower').change(function(){
         var tout = $(this).data('rel').split('||');
         var rel = $(this).data('rel');
         var id_tab = tout[0];
         var id_profile = tout[1];
         var perm = tout[2];
         var enabled = $(this).is(':checked')? 1 : 0;
         var tabsize = tout[3];
         var tabnumber = tout[4];
         var table = 'table#table_'+id_profile;
         var $parentRow = ($(this).parents('tr'));
         var classes = $parentRow.attr('class');
         var $permissionCheckbox = $(this);
         var targetPermissionType;
         var parent = $(this).attr('data-parent');
         if (parent != 0){
            var $parentelem = $(table + ' .ajaxPower.' + perm + '.' + parent);
            if(!$parentelem.is(':checked')){
               $parentelem.prop("checked", true).change();
            }else{
               if(!$(this).is(':checked') && !getChildren(table, perm, parent, rel))
                  $parentelem.prop("checked", false).change();
            }
         }
         switch (true) {
            case $permissionCheckbox.hasClass('view'): targetPermissionType = '.view'; break;
            case $permissionCheckbox.hasClass('add'): targetPermissionType = '.add'; break;
            case $permissionCheckbox.hasClass('delete'): targetPermissionType = '.delete'; break;
            case $permissionCheckbox.hasClass('edit'): targetPermissionType = '.edit'; break;
         }
         if (enabled && classes) {
            var subject = 'child';
            var subjectIndex = classes.indexOf(subject);
            if (-1 !== subjectIndex) {
               var subjectIndexes = [];
               while (-1 !== subjectIndex) {
                  subjectIndexes.push(subjectIndex);
                  subjectIndex = classes.indexOf(subject, subjectIndex + 1);
               }
               subjectIndexes.pop();
               var classAttribute = subject + '-';
               var targetClass;
               var $parentPermissions;
               var $parentPermission;
               while (subjectIndexes.length > 0) {
                  targetClass = new Array(subjectIndexes.length + 1).join(classAttribute);
                  $parentPermissions = $parentRow.prevAll().filter(function (rowIndex, row) {
                     return $(row).attr('class').match(new RegExp('^' + targetClass + '[0-9]'));
                  });
                  $parentPermission = $($parentPermissions[0]).find(targetPermissionType);
                  if (!$parentPermission.prop('checked')) {
                     $parentPermission.prop('checked', true);
                  }
                  subjectIndexes.pop();
               }
               var $topParent = $($parentRow.prevAll().filter('.parent')[0]).find(targetPermissionType);
               if (!$topParent.prop('checked')) {
                  $topParent.prop('checked', true);
               }
            }
         }
         if (perm == 'all' && $(this).parent().parent().hasClass('parent'))
         {
            if (enabled)
               $(this).parent().parent().parent().find('.child-'+id_tab+' input[type=checkbox]').attr('checked', 'checked');
            else
               $(this).parent().parent().parent().find('.child-'+id_tab+' input[type=checkbox]').removeAttr('checked');
            $.ajax({
               url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
               cache: false,
               data : {
                  ajaxMode : '1',
                  id_tab: id_tab,
                  id_profile: id_profile,
                  perm: perm,
                  enabled: enabled,
                  submitAddAccess: '1',
                  addFromParent: '1',
                  action: 'updateAccess',
                  ajax: '1',
                  token: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminAccess'),$_smarty_tpl);?>
'
               },
               success : function(res,textStatus,jqXHR)
               {
                  try {
                     if (res == 'ok')
                        showSuccessMessage("<?php echo smartyTranslate(array('s'=>'Update successful','d'=>'Admin.Notifications.Success'),$_smarty_tpl);?>
");
                     else
                        showErrorMessage("<?php echo smartyTranslate(array('s'=>'Unable to update settings.','d'=>'Admin.Notifications.Error'),$_smarty_tpl);?>
");
                  } catch(e) {
                     jAlert('Technical error');
                  }
               }
            });
         }
         perfect_access_js_gestion(this, perm, id_tab, tabsize, tabnumber, table);
         $.ajax({
            url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
            cache: false,
            data : {
               ajaxMode : '1',
               id_tab: id_tab,
               id_profile: id_profile,
               perm: perm,
               enabled: enabled,
               submitAddAccess: '1',
               action: 'updateAccess',
               ajax: '1',
               token: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminAccess'),$_smarty_tpl);?>
'
            },
            success : function(res,textStatus,jqXHR)
            {
               try
               {
                  if (res == 'ok')
                     showSuccessMessage("<?php echo smartyTranslate(array('s'=>'Update successful','d'=>'Admin.Notifications.Success'),$_smarty_tpl);?>
");
                  else
                     showErrorMessage("<?php echo smartyTranslate(array('s'=>'Unable to update settings.','d'=>'Admin.Notifications.Error'),$_smarty_tpl);?>
");
               }
               catch(e)
               {
                  jAlert('Technical error');
               }
            }
         });
      });
      $(".changeModuleAccess").change(function(){
         var tout = $(this).data('rel').split('||');
         var id_module = tout[0];
         var perm = tout[1];
         var id_profile = tout[2];
         var enabled = $(this).is(':checked') ? 1 : 0;
         var enabled_attr = $(this).is(':checked') ? true : false;
         var table = 'table#table_module_'+id_profile;
         if (id_module == -1)
            $(table+' .ajax-ma-'+perm).each(function(key, value) {
               $(this).attr("checked", enabled_attr);
            });
         else if (!enabled)
            $(table+' #ajax-ma-'+perm+'-master').each(function(key, value) {
               $(this).attr("checked", enabled_attr);
            });
         $.ajax({
            url: "<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminAccess'));?>
",
            cache: false,
            data : {
               ajaxMode: '1',
               id_module: id_module,
               perm: perm,
               enabled: enabled,
               id_profile: id_profile,
               changeModuleAccess: '1',
               action: 'updateModuleAccess',
               ajax: '1',
               token: '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminAccess'),$_smarty_tpl);?>
'
            },
            success : function(res,textStatus,jqXHR)
            {
               try
               {
                  if (res == 'ok')
                     showSuccessMessage("<?php echo smartyTranslate(array('s'=>'Update successful','d'=>'Admin.Notifications.Success'),$_smarty_tpl);?>
");
                  else
                     showErrorMessage("<?php echo smartyTranslate(array('s'=>'Unable to update settings.','d'=>'Admin.Notifications.Error'),$_smarty_tpl);?>
");
               }
               catch(e)
               {
                  jAlert('Technical error');
               }
            }
         });
      });
   });
</script>
<?php if ($_smarty_tpl->tpl_vars['show_toolbar']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('toolbar_btn'=>$_smarty_tpl->tpl_vars['toolbar_btn']->value,'toolbar_scroll'=>$_smarty_tpl->tpl_vars['toolbar_scroll']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value), 0);?>

  <div class="leadin"></div>
<?php }?>
<div class="row">
  <div class="productTabs col-lg-2">
    <div class="tab list-group">
      <?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
        <a class="list-group-item nav-profile <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile']==$_smarty_tpl->tpl_vars['current_profile']->value) {?>active<?php }?>"
           id="profile-<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"
           href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current']->value,'html','UTF-8');?>
&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token']->value,'html','UTF-8');?>
&amp;id_profile=<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['name'];?>
</a>
      <?php } ?>
    </div>
  </div>
  <form id="<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form" class="defaultForm form-horizontal col-lg-10"
        action="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['current']->value,'html','UTF-8');?>
&amp;<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
=1&amp;token=<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['token']->value,'html','UTF-8');?>
"
        method="post" enctype="multipart/form-data">
    <?php if ($_smarty_tpl->tpl_vars['form_id']->value) {?>
      <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
"/>
    <?php }?>
    <?php $_smarty_tpl->tpl_vars['tabsize'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['tabs']->value), null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
      <?php if ($_smarty_tpl->tpl_vars['tab']->value['id_tab']>$_smarty_tpl->tpl_vars['tabsize']->value) {?>
        <?php $_smarty_tpl->tpl_vars['tabsize'] = new Smarty_variable($_smarty_tpl->tpl_vars['tab']->value['id_tab'], null, 0);?>
      <?php }?>
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['profile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['profile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['profiles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['profile']->key => $_smarty_tpl->tpl_vars['profile']->value) {
$_smarty_tpl->tpl_vars['profile']->_loop = true;
?>
      <div class="profile-<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
 tab-profile"
           style="display:<?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile']!=$_smarty_tpl->tpl_vars['current_profile']->value) {?>none<?php }?>">
        <div class="row">
          <?php if ($_smarty_tpl->tpl_vars['profile']->value['id_profile']!=$_smarty_tpl->tpl_vars['admin_profile']->value) {?>
            <div class="col-lg-6">
              <div class="panel">
                <h3><?php echo smartyTranslate(array('s'=>'Menu','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl);?>
</h3>
                <table class="table" id="table_<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
">
                  <?php $_smarty_tpl->tpl_vars['enable_bulk_view'] = new Smarty_variable(true, null, 0);?>
                  <?php $_smarty_tpl->tpl_vars['enable_bulk_add'] = new Smarty_variable(true, null, 0);?>
                  <?php $_smarty_tpl->tpl_vars['enable_bulk_edit'] = new Smarty_variable(true, null, 0);?>
                  <?php $_smarty_tpl->tpl_vars['enable_bulk_delete'] = new Smarty_variable(true, null, 0);?>
                  <?php $_smarty_tpl->tpl_vars['enable_bulk_all'] = new Smarty_variable(true, null, 0);?>
                  <tbody>
                  <?php if (!count($_smarty_tpl->tpl_vars['tabs']->value)) {?>
                    <tr>
                      <td colspan="6"><?php echo smartyTranslate(array('s'=>'No menu','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl);?>
</td>
                    </tr>
                  <?php } else { ?>
                    <?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
                      <?php $_smarty_tpl->tpl_vars['access'] = new Smarty_variable($_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']], null, 0);?>
                      <?php $_smarty_tpl->tpl_vars['result_accesses'] = new Smarty_variable(0, null, 0);?>
                      <tr class="parent">
                        <td class="bold"> &raquo;<strong><?php echo $_smarty_tpl->tpl_vars['tab']->value['name'];?>
</strong></td>
                        <?php $_smarty_tpl->tpl_vars['has_all_rights'] = new Smarty_variable(true, null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
                          <?php $_smarty_tpl->tpl_vars['id_perm'] = new Smarty_variable($_smarty_tpl->tpl_vars['id_perms']->value[$_smarty_tpl->tpl_vars['perm']->value], null, 0);?>
                          <?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]) {?>
                            <td>
                              <input type="checkbox" data-id="<?php echo $_smarty_tpl->tpl_vars['id_perm']->value;?>
" data-parent="0" data-type="<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
"
                                     data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"
                                     class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]==1) {?> checked="checked"<?php }?>/>
                            </td>
                          <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['has_all_rights'] = new Smarty_variable(false, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['enable_bulk_view'] = new Smarty_variable(false, null, 0);?>
                            <td>
                              <input type="checkbox"
                                     disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]==1) {?> checked="checked"<?php }?>/>
                            </td>
                          <?php }?>
                          <?php $_smarty_tpl->tpl_vars['result_accesses'] = new Smarty_variable($_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value], null, 0);?>
                        <?php } ?>
                        <td>
                          <input
                            type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['has_all_rights']->value) {?> data-id="4" data-parent="0" data-type="all" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['tab']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }?><?php if ($_smarty_tpl->tpl_vars['result_accesses']->value==4) {?> checked="checked"<?php }?>/>
                        </td>
                      </tr>
                      <?php if (count($_smarty_tpl->tpl_vars['tab']->value['children'])) {?>
                        <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                          <?php if ($_smarty_tpl->tpl_vars['child']->value['id_parent']===$_smarty_tpl->tpl_vars['tab']->value['id_tab']) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']])) {?>
                              <?php $_smarty_tpl->tpl_vars['is_child'] = new Smarty_variable(true, null, 0);?>
                              <?php $_smarty_tpl->tpl_vars['result_accesses'] = new Smarty_variable(0, null, 0);?>
                              <tr class="child-<?php echo $_smarty_tpl->tpl_vars['child']->value['id_parent'];?>
">
                                <td class="bold"> &raquo; <?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</td>
                                <?php $_smarty_tpl->tpl_vars['has_all_rights'] = new Smarty_variable(true, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
                                  <?php $_smarty_tpl->tpl_vars['id_perm'] = new Smarty_variable($_smarty_tpl->tpl_vars['id_perms']->value[$_smarty_tpl->tpl_vars['perm']->value], null, 0);?>
                                  <?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]) {?>
                                    <td>
                                      <input type="checkbox" data-id="<?php echo $_smarty_tpl->tpl_vars['id_perm']->value;?>
" data-parent="<?php echo $_smarty_tpl->tpl_vars['child']->value['id_parent'];?>
"
                                             data-type="<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
"
                                             data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"
                                             class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]==1) {?> checked="checked"<?php }?>/>
                                    </td>
                                  <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['has_all_rights'] = new Smarty_variable(false, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['enable_bulk_add'] = new Smarty_variable(false, null, 0);?>
                                    <td>
                                      <input type="checkbox"
                                             disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]==1) {?> checked="checked"<?php }?>/>
                                    </td>
                                  <?php }?>
                                  <?php $_smarty_tpl->tpl_vars['result_accesses'] = new Smarty_variable($_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value], null, 0);?>
                                <?php } ?>
                                <td>
                                  <input
                                    type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['has_all_rights']->value) {?> data-id="4" data-parent="<?php echo $_smarty_tpl->tpl_vars['child']->value['id_parent'];?>
" data-type="all" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['child']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }?><?php if ($_smarty_tpl->tpl_vars['result_accesses']->value==4) {?> checked="checked"<?php }?>/>
                                </td>
                              </tr>
                            <?php }?>

                            <?php if (count($_smarty_tpl->tpl_vars['child']->value['children'])) {?>
                              <?php  $_smarty_tpl->tpl_vars['subChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subChild']->key => $_smarty_tpl->tpl_vars['subChild']->value) {
$_smarty_tpl->tpl_vars['subChild']->_loop = true;
?>
                                <?php if (isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']])) {?>
                                  <?php $_smarty_tpl->tpl_vars['is_child'] = new Smarty_variable(true, null, 0);?>
                                  <?php $_smarty_tpl->tpl_vars['result_accesses'] = new Smarty_variable(0, null, 0);?>
                                  <tr class="child-child-<?php echo $_smarty_tpl->tpl_vars['subChild']->value['id_parent'];?>
">
                                    <td class="bold"> &nbsp; &nbsp; &raquo; <?php echo $_smarty_tpl->tpl_vars['subChild']->value['name'];?>
</td>
                                    <?php $_smarty_tpl->tpl_vars['has_all_rights'] = new Smarty_variable(true, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
                                      <?php $_smarty_tpl->tpl_vars['id_perm'] = new Smarty_variable($_smarty_tpl->tpl_vars['id_perms']->value[$_smarty_tpl->tpl_vars['perm']->value], null, 0);?>
                                      <?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['subChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]) {?>
                                        <td>
                                          <input type="checkbox" data-id="<?php echo $_smarty_tpl->tpl_vars['id_perm']->value;?>
"
                                                 data-parent="<?php echo $_smarty_tpl->tpl_vars['subChild']->value['id_parent'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
"
                                                 data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"
                                                 class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]==1) {?> checked="checked"<?php }?>/>
                                        </td>
                                      <?php } else { ?>
                                        <?php $_smarty_tpl->tpl_vars['has_all_rights'] = new Smarty_variable(false, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['enable_bulk_edit'] = new Smarty_variable(false, null, 0);?>
                                        <td>
                                          <input type="checkbox"
                                                 disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]==1) {?> checked="checked"<?php }?>/>
                                        </td>
                                      <?php }?>
                                      <?php $_smarty_tpl->tpl_vars['result_accesses'] = new Smarty_variable($_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value], null, 0);?>
                                    <?php } ?>
                                    <td>
                                      <input
                                        type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['has_all_rights']->value) {?> data-id="4" data-parent="<?php echo $_smarty_tpl->tpl_vars['subChild']->value['id_parent'];?>
" data-type="all" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subChild']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }?><?php if ($_smarty_tpl->tpl_vars['result_accesses']->value==4) {?> checked="checked"<?php }?>/>
                                    </td>
                                  </tr>
                                  <?php if (count($_smarty_tpl->tpl_vars['subChild']->value['children'])) {?>
                                    <?php  $_smarty_tpl->tpl_vars['subsubChild'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subsubChild']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subChild']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subsubChild']->key => $_smarty_tpl->tpl_vars['subsubChild']->value) {
$_smarty_tpl->tpl_vars['subsubChild']->_loop = true;
?>
                                      <?php if (isset($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']])) {?>
                                        <?php $_smarty_tpl->tpl_vars['is_child'] = new Smarty_variable(true, null, 0);?>
                                        <?php $_smarty_tpl->tpl_vars['result_accesses'] = new Smarty_variable(0, null, 0);?>
                                        <tr class="child-child-child-<?php echo $_smarty_tpl->tpl_vars['subsubChild']->value['id_parent'];?>
">
                                          <td class="bold">&nbsp; &nbsp; &nbsp; &nbsp; &raquo; <?php echo $_smarty_tpl->tpl_vars['subsubChild']->value['name'];?>
</td>
                                          <?php $_smarty_tpl->tpl_vars['has_all_rights'] = new Smarty_variable(true, null, 0);?>
                                          <?php  $_smarty_tpl->tpl_vars['perm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['perm']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['perms']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['perm']->key => $_smarty_tpl->tpl_vars['perm']->value) {
$_smarty_tpl->tpl_vars['perm']->_loop = true;
?>
                                            <?php $_smarty_tpl->tpl_vars['id_perm'] = new Smarty_variable($_smarty_tpl->tpl_vars['id_perms']->value[$_smarty_tpl->tpl_vars['perm']->value], null, 0);?>
                                            <?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['accesses']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]) {?>
                                              <td>
                                                <input type="checkbox" data-id="<?php echo $_smarty_tpl->tpl_vars['id_perm']->value;?>
"
                                                       data-parent="<?php echo $_smarty_tpl->tpl_vars['subsubChild']->value['id_parent'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
"
                                                       data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||<?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"
                                                       class="ajaxPower <?php echo $_smarty_tpl->tpl_vars['perm']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]==1) {?> checked="checked"<?php }?>/>
                                              </td>
                                            <?php } else { ?>
                                              <?php $_smarty_tpl->tpl_vars['has_all_rights'] = new Smarty_variable(false, null, 0);?>
                                              <?php $_smarty_tpl->tpl_vars['enable_bulk_delete'] = new Smarty_variable(false, null, 0);?>
                                              <td>
                                                <input type="checkbox"
                                                       disabled="disabled"<?php if ($_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value]==1) {?> checked="checked"<?php }?>/>
                                              </td>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars['result_accesses'] = new Smarty_variable($_smarty_tpl->tpl_vars['result_accesses']->value+$_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']][$_smarty_tpl->tpl_vars['perm']->value], null, 0);?>
                                          <?php } ?>
                                          <td>
                                            <input
                                              type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['has_all_rights']->value) {?> data-id="4" data-parent="<?php echo $_smarty_tpl->tpl_vars['subChild']->value['id_parent'];?>
" data-type="all" data-rel="<?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
" class="ajaxPower all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
"<?php } else { ?> <?php $_smarty_tpl->tpl_vars['enable_bulk_all'] = new Smarty_variable(false, null, 0);?>class="all <?php echo $_smarty_tpl->tpl_vars['access']->value[$_smarty_tpl->tpl_vars['subsubChild']->value['id_tab']]['id_tab'];?>
" disabled="disabled"<?php }?><?php if ($_smarty_tpl->tpl_vars['result_accesses']->value==4) {?> checked="checked"<?php }?>/>
                                          </td>
                                        </tr>
                                      <?php }?>
                                    <?php } ?>
                                  <?php }?>
                                <?php }?>
                              <?php } ?>
                            <?php }?>
                          <?php }?>
                        <?php } ?>
                      <?php }?>
                    <?php } ?>
                  <?php }?>
                  </tbody>
                  <thead>
                  <tr>
                    <th></th>
                    <th>
                      <input type="checkbox" name="1"
                             class="viewall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['enable_bulk_view']->value) {?> data-id="0" data-parent="0" data-type="view" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||view||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo smartyTranslate(array('s'=>'View','d'=>'Admin.Actions'),$_smarty_tpl);?>

                    </th>
                    <th>
                      <input type="checkbox" name="1"
                             class="addall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['enable_bulk_add']->value) {?> data-id="1" data-parent="0" data-type="add" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||add||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo smartyTranslate(array('s'=>'Add','d'=>'Admin.Actions'),$_smarty_tpl);?>

                    </th>
                    <th>
                      <input type="checkbox" name="1"
                             class="editall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['enable_bulk_edit']->value) {?> data-id="2" data-parent="0" data-type="edit" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||edit||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo smartyTranslate(array('s'=>'Edit','d'=>'Admin.Actions'),$_smarty_tpl);?>

                    </th>
                    <th>
                      <input type="checkbox" name="1"
                             class="deleteall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['enable_bulk_delete']->value) {?> data-id="3" data-parent="0" data-type="delete" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||delete||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo smartyTranslate(array('s'=>'Delete','d'=>'Admin.Actions'),$_smarty_tpl);?>

                    </th>
                    <th>
                      <input type="checkbox" name="1"
                             class="allall ajaxPower"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['enable_bulk_all']->value) {?> data-id="4" data-parent="0" data-type="all" data-rel="-1||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
||all||<?php echo $_smarty_tpl->tpl_vars['tabsize']->value;?>
||<?php echo count($_smarty_tpl->tpl_vars['tabs']->value);?>
"<?php } else { ?> disabled="disabled"<?php }?>/>
                      <?php echo smartyTranslate(array('s'=>'All','d'=>'Admin.Global'),$_smarty_tpl);?>

                    </th>
                  </tr>
                  </thead>
                </table>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="panel">
                <h3><?php echo smartyTranslate(array('s'=>'Modules','d'=>'Admin.Global'),$_smarty_tpl);?>
</h3>
                <table class="table" id="table_module_<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
">
                  <tbody>
                  <?php if (!count($_smarty_tpl->tpl_vars['modules']->value)) {?>
                    <tr>
                      <td colspan="3"><?php echo smartyTranslate(array('s'=>'No module has been installed.','d'=>'Admin.Notifications.Warning'),$_smarty_tpl);?>
</td>
                    </tr>
                  <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['enable_bulk_view'] = new Smarty_variable(true, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['enable_bulk_configure'] = new Smarty_variable(true, null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['enable_bulk_uninstall'] = new Smarty_variable(true, null, 0);?>
                    <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['profile']->value['id_profile']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['module']->key;
?>
                      <tr>
                        <td>&raquo; <?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</td>
                        <td>
                          <input type="checkbox"
                                 value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['view']==true) {?> checked="checked"<?php }?><?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['k']->value]['view']) {?> class="ajax-ma-view changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||view||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?><?php $_smarty_tpl->tpl_vars['enable_bulk_view'] = new Smarty_variable(false, null, 0);?> class="ajax-ma-view" disabled="disabled"<?php }?>/>
                        </td>
                        <td>
                          <input type="checkbox"
                                 value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['configure']==true) {?> checked="checked"<?php }?><?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['k']->value]['configure']) {?> class="ajax-ma-configure changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||configure||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?><?php $_smarty_tpl->tpl_vars['enable_bulk_configure'] = new Smarty_variable(false, null, 0);?> class="ajax-ma-configure" disabled="disabled"<?php }?>/>
                        </td>
                        <td>
                          <input type="checkbox"
                                 value="1"<?php if ($_smarty_tpl->tpl_vars['module']->value['uninstall']==true) {?> checked="checked"<?php }?><?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['modules']->value[$_smarty_tpl->tpl_vars['employee_profile_id']->value][$_smarty_tpl->tpl_vars['k']->value]['uninstall']) {?> class="ajax-ma-uninstall changeModuleAccess" data-rel="<?php echo $_smarty_tpl->tpl_vars['module']->value['id_module'];?>
||uninstall||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?><?php $_smarty_tpl->tpl_vars['enable_bulk_uninstall'] = new Smarty_variable(false, null, 0);?> class="ajax-ma-uninstall" disabled="disabled"<?php }?>/>
                        </td>
                      </tr>
                    <?php } ?>
                  <?php }?>
                  </tbody>
                  <thead>
                  <tr>
                    <th></th>
                    <th>
                      <input
                        type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['enable_bulk_view']->value) {?> class="changeModuleAccess" data-rel="-1||view||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo smartyTranslate(array('s'=>'View','d'=>'Admin.Actions'),$_smarty_tpl);?>

                    </th>
                    <th>
                      <input
                        type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['enable_bulk_configure']->value) {?> class="changeModuleAccess" data-rel="-1||configure||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo smartyTranslate(array('s'=>'Configure','d'=>'Admin.Actions'),$_smarty_tpl);?>

                    </th>
                    <th>
                      <input
                        type="checkbox"<?php if ($_smarty_tpl->tpl_vars['access_edit']->value==1&&$_smarty_tpl->tpl_vars['enable_bulk_uninstall']->value) {?> class="changeModuleAccess" data-rel="-1||uninstall||<?php echo $_smarty_tpl->tpl_vars['profile']->value['id_profile'];?>
"<?php } else { ?> disabled="disabled"<?php }?>/> <?php echo smartyTranslate(array('s'=>'Uninstall','d'=>'Admin.Actions'),$_smarty_tpl);?>

                    </th>
                  </tr>
                  </thead>
                </table>
              </div>
            </div>
          <?php } else { ?>
            <div class="col-lg-12">
              <div class="panel">
                <?php echo smartyTranslate(array('s'=>'Administrator permissions cannot be modified.','d'=>'Admin.Advparameters.Notification'),$_smarty_tpl);?>

              </div>
            </div>
          <?php }?>
        </div>
      </div>
    <?php } ?>
  </form>
</div>
<?php }} ?>
