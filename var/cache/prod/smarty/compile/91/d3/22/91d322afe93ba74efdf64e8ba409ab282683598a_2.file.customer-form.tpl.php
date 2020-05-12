<?php
/* Smarty version 3.1.33, created on 2020-05-12 14:58:27
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\checkout\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eba9d7399dd76_18194358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91d322afe93ba74efdf64e8ba409ab282683598a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\checkout\\_partials\\customer-form.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eba9d7399dd76_18194358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4425636355eba9d73999291_02839774', "form_field");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20173602405eba9d7399d5a5_63699111', "form_buttons");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "customer/_partials/customer-form.tpl");
}
/* {block "form_field"} */
class Block_4425636355eba9d73999291_02839774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_4425636355eba9d73999291_02839774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] === 'password' && $_smarty_tpl->tpl_vars['guest_allowed']->value) {?>
      <p>
        <span class="font-weight-bold"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an account','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span> <span class="font-italic"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(optional)','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <br>
        <span class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'And save time on your next order!','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
      </p>
      <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "form_field"} */
/* {block "form_buttons"} */
class Block_20173602405eba9d7399d5a5_63699111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_20173602405eba9d7399d5a5_63699111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <button
      class="continue btn btn-primary float-xs-right"
      name="continue"
      data-link-action="register-new-customer"
      type="submit"
      value="1"
    >
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

    </button>
<?php
}
}
/* {/block "form_buttons"} */
}
