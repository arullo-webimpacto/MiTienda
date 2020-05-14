<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 14:22:18
=======
/* Smarty version 3.1.33, created on 2020-05-14 17:24:02
>>>>>>> rama-assign
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd37fa8e20f9_23889808',
=======
  'unifunc' => 'content_5ebd62922867b5_27008623',
>>>>>>> rama-assign
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1589282751,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5ebd37fa8e20f9_23889808 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebd62922867b5_27008623 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> rama-assign
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12897678195ebd37fa8e07d3_85476748', 'block_social');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10030295655ebd6292284f85_62251800', 'block_social');
>>>>>>> rama-assign
?>

<?php }
/* {block 'block_social'} */
<<<<<<< HEAD
class Block_12897678195ebd37fa8e07d3_85476748 extends Smarty_Internal_Block
=======
class Block_10030295655ebd6292284f85_62251800 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'block_social' => 
  array (
<<<<<<< HEAD
    0 => 'Block_12897678195ebd37fa8e07d3_85476748',
=======
    0 => 'Block_10030295655ebd6292284f85_62251800',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
