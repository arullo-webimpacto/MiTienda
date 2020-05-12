<?php
/* Smarty version 3.1.33, created on 2020-05-12 14:58:27
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\customer\_partials\customer-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eba9d73a0c204_31097779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53489c025a112d78faf10ac21b7262084d103e11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\customer\\_partials\\customer-form.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_5eba9d73a0c204_31097779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10498764805eba9d73a079a0_33884949', 'customer_form');
?>

<?php }
/* {block 'customer_form_errors'} */
class Block_20113274595eba9d73a07d48_76208899 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'customer_form_errors'} */
/* {block 'customer_form_actionurl'} */
class Block_4528095065eba9d73a08941_55765868 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'customer_form_actionurl'} */
/* {block "form_field"} */
class Block_13735382615eba9d73a09b02_69182220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block "form_field"} */
/* {block "form_fields"} */
class Block_16457814335eba9d73a09133_79407345 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13735382615eba9d73a09b02_69182220', "form_field", $this->tplIndex);
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php echo $_smarty_tpl->tpl_vars['hook_create_account_form']->value;?>

    <?php
}
}
/* {/block "form_fields"} */
/* {block "form_buttons"} */
class Block_1611246045eba9d73a0b6b4_50873328 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <button class="btn btn-primary form-control-submit float-xs-right" data-link-action="save-customer" type="submit">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </button>
      <?php
}
}
/* {/block "form_buttons"} */
/* {block 'customer_form_footer'} */
class Block_16659824305eba9d73a0b2c2_87129206 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer class="form-footer clearfix">
      <input type="hidden" name="submitCreate" value="1">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1611246045eba9d73a0b6b4_50873328', "form_buttons", $this->tplIndex);
?>

    </footer>
  <?php
}
}
/* {/block 'customer_form_footer'} */
/* {block 'customer_form'} */
class Block_10498764805eba9d73a079a0_33884949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'customer_form' => 
  array (
    0 => 'Block_10498764805eba9d73a079a0_33884949',
  ),
  'customer_form_errors' => 
  array (
    0 => 'Block_20113274595eba9d73a07d48_76208899',
  ),
  'customer_form_actionurl' => 
  array (
    0 => 'Block_4528095065eba9d73a08941_55765868',
  ),
  'form_fields' => 
  array (
    0 => 'Block_16457814335eba9d73a09133_79407345',
  ),
  'form_field' => 
  array (
    0 => 'Block_13735382615eba9d73a09b02_69182220',
  ),
  'customer_form_footer' => 
  array (
    0 => 'Block_16659824305eba9d73a0b2c2_87129206',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_1611246045eba9d73a0b6b4_50873328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20113274595eba9d73a07d48_76208899', 'customer_form_errors', $this->tplIndex);
?>


<form action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4528095065eba9d73a08941_55765868', 'customer_form_actionurl', $this->tplIndex);
?>
" id="customer-form" class="js-customer-form" method="post">
  <section>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16457814335eba9d73a09133_79407345', "form_fields", $this->tplIndex);
?>

  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16659824305eba9d73a0b2c2_87129206', 'customer_form_footer', $this->tplIndex);
?>


</form>
<?php
}
}
/* {/block 'customer_form'} */
}
