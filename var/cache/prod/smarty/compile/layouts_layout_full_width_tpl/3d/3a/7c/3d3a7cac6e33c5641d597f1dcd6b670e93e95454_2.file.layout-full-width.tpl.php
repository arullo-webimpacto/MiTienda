<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 17:34:06
=======
/* Smarty version 3.1.33, created on 2020-05-15 10:48:01
>>>>>>> rama-assign
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd64ee4a9e28_62227717',
=======
  'unifunc' => 'content_5ebe5741b7b767_04591035',
>>>>>>> rama-assign
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
<<<<<<< HEAD
function content_5ebd64ee4a9e28_62227717 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebe5741b7b767_04591035 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> rama-assign
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10336262615ebd64ee4a8216_82663788', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5912965515ebd64ee4a8824_60102360', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18499743125ebe5741b79bf1_46105265', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16770627555ebe5741b7a173_24562790', 'right_column');
>>>>>>> rama-assign
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9813333925ebd64ee4a8c95_44696059', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5463981315ebe5741b7a5d5_33499121', 'content_wrapper');
>>>>>>> rama-assign
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_10336262615ebd64ee4a8216_82663788 extends Smarty_Internal_Block
=======
class Block_18499743125ebe5741b79bf1_46105265 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_10336262615ebd64ee4a8216_82663788',
=======
    0 => 'Block_18499743125ebe5741b79bf1_46105265',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_5912965515ebd64ee4a8824_60102360 extends Smarty_Internal_Block
=======
class Block_16770627555ebe5741b7a173_24562790 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_5912965515ebd64ee4a8824_60102360',
=======
    0 => 'Block_16770627555ebe5741b7a173_24562790',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_15075471025ebd64ee4a9448_02543328 extends Smarty_Internal_Block
=======
class Block_19422347295ebe5741b7ad76_32673758 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p>Hello world! This is HTML5 Boilerplate.</p>
    <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
<<<<<<< HEAD
class Block_9813333925ebd64ee4a8c95_44696059 extends Smarty_Internal_Block
=======
class Block_5463981315ebe5741b7a5d5_33499121 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_9813333925ebd64ee4a8c95_44696059',
  ),
  'content' => 
  array (
    0 => 'Block_15075471025ebd64ee4a9448_02543328',
=======
    0 => 'Block_5463981315ebe5741b7a5d5_33499121',
  ),
  'content' => 
  array (
    0 => 'Block_19422347295ebe5741b7ad76_32673758',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15075471025ebd64ee4a9448_02543328', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19422347295ebe5741b7ad76_32673758', 'content', $this->tplIndex);
>>>>>>> rama-assign
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
