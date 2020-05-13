<?php
/* Smarty version 3.1.33, created on 2020-05-13 10:52:26
  from 'C:\xampp\htdocs\mitienda\admin006nxtose\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebbb54a5535d0_68615614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31caad337d0727bcfffaf11d37dbdf99ba8179db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\admin006nxtose\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1589282756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebbb54a5535d0_68615614 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
