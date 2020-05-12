<?php
/* Smarty version 3.1.33, created on 2020-05-12 14:58:40
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\checkout\_partials\cart-summary-items-subtotal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eba9d803054d9_66626426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42979cf4ee2424a381e80aa50ea4fa74b0280096' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-items-subtotal.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eba9d803054d9_66626426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926644195eba9d80304599_08272924', 'cart_summary_items_subtotal');
?>

<?php }
/* {block 'cart_summary_items_subtotal'} */
class Block_926644195eba9d80304599_08272924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_items_subtotal' => 
  array (
    0 => 'Block_926644195eba9d80304599_08272924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>
<?php
}
}
/* {/block 'cart_summary_items_subtotal'} */
}
