<?php
/* Smarty version 3.1.33, created on 2020-05-12 14:58:27
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\checkout\_partials\steps\checkout-step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eba9d73947083_53126071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec3750087271f9d51a93cc5286f743a85d223c82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\checkout\\_partials\\steps\\checkout-step.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eba9d73947083_53126071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18651027535eba9d73944c08_56764456', 'step');
?>

<?php }
/* {block 'step_content'} */
class Block_3273758045eba9d739469d6_78050323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
DUMMY STEP CONTENT<?php
}
}
/* {/block 'step_content'} */
/* {block 'step'} */
class Block_18651027535eba9d73944c08_56764456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_18651027535eba9d73944c08_56764456',
  ),
  'step_content' => 
  array (
    0 => 'Block_3273758045eba9d739469d6_78050323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value) )), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title h3">
      <i class="material-icons rtl-no-flip done">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
    </h1>

    <div class="content">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3273758045eba9d739469d6_78050323', 'step_content', $this->tplIndex);
?>

    </div>
  </section>
<?php
}
}
/* {/block 'step'} */
}
