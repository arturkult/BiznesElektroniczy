<?php /* Smarty version Smarty-3.1.19, created on 2017-11-04 19:37:56
         compiled from "D:\xampp\htdocs\ksiegarnia\admin924uxptek\themes\new-theme\template\components\layout\notifications_center.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193351160659fe09048de8a1-87541576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14d137d53bceb1e0275b328e9ab6e44a03651c3d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\ksiegarnia\\admin924uxptek\\themes\\new-theme\\template\\components\\layout\\notifications_center.tpl',
      1 => 1509797089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193351160659fe09048de8a1-87541576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_new_orders' => 0,
    'active' => 0,
    'show_new_customers' => 0,
    'show_new_messages' => 0,
    'no_order_tip' => 0,
    'no_customer_tip' => 0,
    'no_customer_message_tip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59fe0904955573_77392637',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59fe0904955573_77392637')) {function content_59fe0904955573_77392637($_smarty_tpl) {?>
<div id="notif" class="notification-center dropdown">
  <div class="notification js-notification dropdown-toggle">
    <i class="material-icons">notifications_none</i>
    <span id="notifications-total" class="count hide">0</span>
  </div>
  <div class="dropdown-menu dropdown-menu-right js-notifs_dropdown">
    <div class="notifications">
      <ul class="nav nav-tabs" role="tablist">
        <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable("active", null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_orders']->value) {?>
          <li class="nav-item">
            <a
              class="nav-link <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
"
              id="orders-tab"
              data-toggle="tab"
              data-type="order"
              href="#orders-notifications"
              role="tab"
            >
              <?php echo smartyTranslate(array('s'=>'Orders[1][/1]','html'=>true,'sprintf'=>array('[1]'=>'<span id="_nb_new_orders_">','[/1]'=>'</span>'),'d'=>'Admin.Navigation.Notification'),$_smarty_tpl);?>

            </a>
          </li>
          <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_customers']->value) {?>
          <li class="nav-item">
            <a
              class="nav-link <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
"
              id="customers-tab"
              data-toggle="tab"
              data-type="customer"
              href="#customers-notifications"
              role="tab"
            >
              <?php echo smartyTranslate(array('s'=>'Customers[1][/1]','html'=>true,'sprintf'=>array('[1]'=>'<span id="_nb_new_customers_">','[/1]'=>'</span>'),'d'=>'Admin.Navigation.Notification'),$_smarty_tpl);?>

            </a>
          </li>
          <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_messages']->value) {?>
          <li class="nav-item">
            <a
              class="nav-link <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
"
              id="messages-tab"
              data-toggle="tab"
              data-type="customer_message"
              href="#messages-notifications"
              role="tab"
            >
              <?php echo smartyTranslate(array('s'=>'Messages[1][/1]','html'=>true,'sprintf'=>array('[1]'=>'<span id="_nb_new_messages_">','[/1]'=>'</span>'),'d'=>'Admin.Navigation.Notification'),$_smarty_tpl);?>

            </a>
          </li>
          <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable('', null, 0);?>
        <?php }?>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable("active", null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_orders']->value) {?>
          <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 empty" id="orders-notifications" role="tabpanel">
            <p class="no-notification">
              <?php echo smartyTranslate(array('s'=>'No new order for now :(','d'=>'Admin.Navigation.Notification'),$_smarty_tpl);?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['no_order_tip']->value;?>

            </p>
            <div class="notification-elements"></div>
          </div>
          <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_customers']->value) {?>
          <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 empty" id="customers-notifications" role="tabpanel">
            <p class="no-notification">
              <?php echo smartyTranslate(array('s'=>'No new customer for now :(','d'=>'Admin.Navigation.Notification'),$_smarty_tpl);?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['no_customer_tip']->value;?>

            </p>
            <div class="notification-elements"></div>
          </div>
          <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable('', null, 0);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['show_new_messages']->value) {?>
          <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
 empty" id="messages-notifications" role="tabpanel">
            <p class="no-notification">
              <?php echo smartyTranslate(array('s'=>'No new message for now.','d'=>'Admin.Navigation.Notification'),$_smarty_tpl);?>
<br>
              <?php echo $_smarty_tpl->tpl_vars['no_customer_message_tip']->value;?>

            </p>
            <div class="notification-elements"></div>
          </div>
          <?php $_smarty_tpl->tpl_vars['active'] = new Smarty_variable('', null, 0);?>
        <?php }?>
      </div>
    </div>
  </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['show_new_orders']->value) {?>
  <script type="text/html" id="order-notification-template">
    <a class="notif" href='order_url'>
      #_id_order_ -
      <?php echo smartyTranslate(array('s'=>'from','d'=>'Admin.Navigation.Notification'),$_smarty_tpl);?>
 <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class="pull-xs-right">_total_paid_</strong>
    </a>
  </script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_new_customers']->value) {?>
  <script type="text/html" id="customer-notification-template">
    <a class="notif" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - <?php echo smartyTranslate(array('s'=>'registered','d'=>'Admin.Navigation.Notification'),$_smarty_tpl);?>
 <strong>_date_add_</strong>
    </a>
  </script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['show_new_messages']->value) {?>
  <script type="text/html" id="message-notification-template">
    <a class="notif" href='message_url'>
    <span class="message-notification-status _status_">
      <i class="material-icons">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class="material-icons">access_time</i> _date_add_
    </a>
  </script>
<?php }?>
<?php }} ?>
