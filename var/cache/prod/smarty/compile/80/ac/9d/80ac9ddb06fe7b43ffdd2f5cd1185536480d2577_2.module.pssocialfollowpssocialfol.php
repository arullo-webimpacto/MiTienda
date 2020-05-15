<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 17:34:06
=======
/* Smarty version 3.1.33, created on 2020-05-15 10:48:02
>>>>>>> rama-assign
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd64eeed9ed2_38861181',
=======
  'unifunc' => 'content_5ebe5742dd1679_29006424',
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
function content_5ebd64eeed9ed2_38861181 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebe5742dd1679_29006424 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> rama-assign
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11160985675ebd64eeed7e97_98885803', 'block_social');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11238387485ebe5742dcfe42_48526516', 'block_social');
>>>>>>> rama-assign
?>

<?php }
/* {block 'block_social'} */
<<<<<<< HEAD
class Block_11160985675ebd64eeed7e97_98885803 extends Smarty_Internal_Block
=======
class Block_11238387485ebe5742dcfe42_48526516 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'block_social' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11160985675ebd64eeed7e97_98885803',
=======
    0 => 'Block_11238387485ebe5742dcfe42_48526516',
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
