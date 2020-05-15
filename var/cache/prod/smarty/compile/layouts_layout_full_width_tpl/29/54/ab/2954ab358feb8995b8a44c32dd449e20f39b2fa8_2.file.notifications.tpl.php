<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 17:34:06
=======
/* Smarty version 3.1.33, created on 2020-05-15 10:48:02
>>>>>>> rama-assign
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\_partials\notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd64eec842d2_16416927',
=======
  'unifunc' => 'content_5ebe57423ca562_52064371',
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
function content_5ebd64eec842d2_16416927 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebe57423ca562_52064371 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19324189055ebd64eec7f1f0_63643152', 'notifications_error');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16834127845ebe57423c4756_71043355', 'notifications_error');
>>>>>>> rama-assign
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['warning']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5485795155ebd64eec80900_30322045', 'notifications_warning');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7766638285ebe57423c5f04_21951778', 'notifications_warning');
>>>>>>> rama-assign
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['success']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110427405ebd64eec81d72_94353877', 'notifications_success');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16684787085ebe57423c7e32_16980482', 'notifications_success');
>>>>>>> rama-assign
?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['notifications']->value['info']) {?>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17881409575ebd64eec831e8_57237856', 'notifications_info');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8274241645ebe57423c9368_89619529', 'notifications_info');
>>>>>>> rama-assign
?>

    <?php }?>
  </div>
</aside>
<?php }
}
/* {block 'notifications_error'} */
<<<<<<< HEAD
class Block_19324189055ebd64eec7f1f0_63643152 extends Smarty_Internal_Block
=======
class Block_16834127845ebe57423c4756_71043355 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications_error' => 
  array (
<<<<<<< HEAD
    0 => 'Block_19324189055ebd64eec7f1f0_63643152',
=======
    0 => 'Block_16834127845ebe57423c4756_71043355',
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
class Block_5485795155ebd64eec80900_30322045 extends Smarty_Internal_Block
=======
class Block_7766638285ebe57423c5f04_21951778 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications_warning' => 
  array (
<<<<<<< HEAD
    0 => 'Block_5485795155ebd64eec80900_30322045',
=======
    0 => 'Block_7766638285ebe57423c5f04_21951778',
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
class Block_110427405ebd64eec81d72_94353877 extends Smarty_Internal_Block
=======
class Block_16684787085ebe57423c7e32_16980482 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications_success' => 
  array (
<<<<<<< HEAD
    0 => 'Block_110427405ebd64eec81d72_94353877',
=======
    0 => 'Block_16684787085ebe57423c7e32_16980482',
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
class Block_17881409575ebd64eec831e8_57237856 extends Smarty_Internal_Block
=======
class Block_8274241645ebe57423c9368_89619529 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications_info' => 
  array (
<<<<<<< HEAD
    0 => 'Block_17881409575ebd64eec831e8_57237856',
=======
    0 => 'Block_8274241645ebe57423c9368_89619529',
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
