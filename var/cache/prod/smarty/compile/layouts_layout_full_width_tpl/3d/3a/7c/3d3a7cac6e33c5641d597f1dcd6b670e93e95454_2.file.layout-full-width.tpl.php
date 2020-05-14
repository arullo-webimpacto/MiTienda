<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 14:22:17
=======
/* Smarty version 3.1.33, created on 2020-05-14 17:24:00
>>>>>>> rama-assign
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\layouts\layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd37f9e4a905_48569799',
=======
  'unifunc' => 'content_5ebd6290e539a8_83256484',
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
function content_5ebd37f9e4a905_48569799 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebd6290e539a8_83256484 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> rama-assign
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_367044485ebd37f9e48d91_16887982', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6124790245ebd37f9e49378_08617301', 'right_column');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_257990175ebd6290e51c28_95473887', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10336126085ebd6290e521b8_96897604', 'right_column');
>>>>>>> rama-assign
?>


<?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12751739945ebd37f9e497d7_31811650', 'content_wrapper');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6287648705ebd6290e52621_20540372', 'content_wrapper');
>>>>>>> rama-assign
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
<<<<<<< HEAD
class Block_367044485ebd37f9e48d91_16887982 extends Smarty_Internal_Block
=======
class Block_257990175ebd6290e51c28_95473887 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_367044485ebd37f9e48d91_16887982',
=======
    0 => 'Block_257990175ebd6290e51c28_95473887',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
<<<<<<< HEAD
class Block_6124790245ebd37f9e49378_08617301 extends Smarty_Internal_Block
=======
class Block_10336126085ebd6290e521b8_96897604 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_6124790245ebd37f9e49378_08617301',
=======
    0 => 'Block_10336126085ebd6290e521b8_96897604',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content'} */
<<<<<<< HEAD
class Block_9314789265ebd37f9e49f64_01619607 extends Smarty_Internal_Block
=======
class Block_12719546525ebd6290e52f63_84519335 extends Smarty_Internal_Block
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
class Block_12751739945ebd37f9e497d7_31811650 extends Smarty_Internal_Block
=======
class Block_6287648705ebd6290e52621_20540372 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_12751739945ebd37f9e497d7_31811650',
  ),
  'content' => 
  array (
    0 => 'Block_9314789265ebd37f9e49f64_01619607',
=======
    0 => 'Block_6287648705ebd6290e52621_20540372',
  ),
  'content' => 
  array (
    0 => 'Block_12719546525ebd6290e52f63_84519335',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="content-wrapper">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9314789265ebd37f9e49f64_01619607', 'content', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12719546525ebd6290e52f63_84519335', 'content', $this->tplIndex);
>>>>>>> rama-assign
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
