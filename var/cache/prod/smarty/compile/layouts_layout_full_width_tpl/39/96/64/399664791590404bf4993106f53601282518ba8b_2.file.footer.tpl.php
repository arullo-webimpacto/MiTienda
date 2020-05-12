<?php
/* Smarty version 3.1.33, created on 2020-05-12 14:58:28
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\checkout\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eba9d7415f7d5_62131083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '399664791590404bf4993106f53601282518ba8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\checkout\\_partials\\footer.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eba9d7415f7d5_62131083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2909942875eba9d7415e306_02860150', 'footer');
?>

<?php }
/* {block 'footer'} */
class Block_2909942875eba9d7415e306_02860150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2909942875eba9d7415e306_02860150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="text-sm-center">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

</div>
<?php
}
}
/* {/block 'footer'} */
}
