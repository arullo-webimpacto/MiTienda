<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 14:22:18
=======
/* Smarty version 3.1.33, created on 2020-05-14 17:24:01
>>>>>>> rama-assign
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd37fa699310_88015965',
=======
  'unifunc' => 'content_5ebd629176d548_60627988',
>>>>>>> rama-assign
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2954ab358feb8995b8a44c32dd449e20f39b2fa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\_partials\\notifications.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5ebd37fa699310_88015965 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebd629176d548_60627988 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> rama-assign
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (isset($_smarty_tpl->tpl_vars['notifications']->value)) {?>
<aside id="notifications">
  <div class="container">
    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['error']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18489103395ebd37fa693ce7_33969723', 'notifications_error');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19802761325ebd62917684b3_29426732', 'notifications_error');
>>>>>>> rama-assign
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15921384115ebd37fa6955e1_31193867', 'notifications_warning');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19206387545ebd6291769bd5_34836876', 'notifications_warning');
>>>>>>> rama-assign
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16377965975ebd37fa696bb0_92703669', 'notifications_success');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1533546995ebd629176b054_48292865', 'notifications_success');
>>>>>>> rama-assign
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1099059205ebd37fa6981c6_72723031', 'notifications_info');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1499342605ebd629176c486_92204122', 'notifications_info');
>>>>>>> rama-assign
?>

    <?php }?>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
<<<<<<< HEAD
class Block_18489103395ebd37fa693ce7_33969723 extends Smarty_Internal_Block
=======
class Block_19802761325ebd62917684b3_29426732 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications_error' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18489103395ebd37fa693ce7_33969723',
=======
    0 => 'Block_19802761325ebd62917684b3_29426732',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-danger" role="alert" data-alert="danger">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['error'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_error'} */
/* {block 'notifications_warning'} */
<<<<<<< HEAD
class Block_15921384115ebd37fa6955e1_31193867 extends Smarty_Internal_Block
=======
class Block_19206387545ebd6291769bd5_34836876 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
<<<<<<< HEAD
    0 => 'Block_15921384115ebd37fa6955e1_31193867',
=======
    0 => 'Block_19206387545ebd6291769bd5_34836876',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-warning" role="alert" data-alert="warning">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['warning'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_warning'} */
/* {block 'notifications_success'} */
<<<<<<< HEAD
class Block_16377965975ebd37fa696bb0_92703669 extends Smarty_Internal_Block
=======
class Block_1533546995ebd629176b054_48292865 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications_success' => 
  array (
<<<<<<< HEAD
    0 => 'Block_16377965975ebd37fa696bb0_92703669',
=======
    0 => 'Block_1533546995ebd629176b054_48292865',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-success" role="alert" data-alert="success">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['success'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_success'} */
/* {block 'notifications_info'} */
<<<<<<< HEAD
class Block_1099059205ebd37fa6981c6_72723031 extends Smarty_Internal_Block
=======
class Block_1499342605ebd629176c486_92204122 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications_info' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1099059205ebd37fa6981c6_72723031',
=======
    0 => 'Block_1499342605ebd629176c486_92204122',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <article class="alert alert-info" role="alert" data-alert="info">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notifications']->value['info'], 'notif');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
?>
              <li><?php echo $_smarty_tpl->tpl_vars['notif']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </article>
      <?php
}
}
/* {/block 'notifications_info'} */
}
