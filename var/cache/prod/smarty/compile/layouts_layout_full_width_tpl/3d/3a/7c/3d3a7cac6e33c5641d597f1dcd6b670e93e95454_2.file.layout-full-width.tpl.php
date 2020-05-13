<?php
/* Smarty version 3.1.33, created on 2020-05-13 20:50:02
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebc415aea7e65_48888634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d3a7cac6e33c5641d597f1dcd6b670e93e95454' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\layouts\\layout-full-width.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebc415aea7e65_48888634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13900820025ebc415aea6086_04630775', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2958730895ebc415aea66b4_76369929', 'right_column');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_351818315ebc415aea6bb4_28684717', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_13900820025ebc415aea6086_04630775 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_13900820025ebc415aea6086_04630775',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_2958730895ebc415aea66b4_76369929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_2958730895ebc415aea66b4_76369929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
class Block_67055685ebc415aea7457_46162111 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_351818315ebc415aea6bb4_28684717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_351818315ebc415aea6bb4_28684717',
  ),
  'content' => 
  array (
    0 => 'Block_67055685ebc415aea7457_46162111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67055685ebc415aea7457_46162111', 'content', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
