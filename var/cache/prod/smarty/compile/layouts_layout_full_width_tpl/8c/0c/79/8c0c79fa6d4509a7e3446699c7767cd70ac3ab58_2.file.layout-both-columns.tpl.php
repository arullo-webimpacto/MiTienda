<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 17:34:06
=======
/* Smarty version 3.1.33, created on 2020-05-15 10:48:01
>>>>>>> rama-assign
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd64ee513b51_43414892',
=======
  'unifunc' => 'content_5ebe5741be8418_10547934',
>>>>>>> rama-assign
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c0c79fa6d4509a7e3446699c7767cd70ac3ab58' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_5ebd64ee513b51_43414892 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebe5741be8418_10547934 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> rama-assign
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6366509095ebd64ee50a420_79816337', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20849670115ebe5741bdc8d4_28334486', 'head');
>>>>>>> rama-assign
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_851843855ebd64ee50b706_37149502', 'hook_after_body_opening_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18229568155ebe5741bdfb31_56840901', 'hook_after_body_opening_tag');
>>>>>>> rama-assign
?>


    <main>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21403380145ebd64ee50bed9_37863979', 'product_activation');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18065346755ebe5741be0371_40331138', 'product_activation');
>>>>>>> rama-assign
?>


      <header id="header">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12890052365ebd64ee50c693_34603862', 'header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15615803885ebe5741be0b50_69154861', 'header');
>>>>>>> rama-assign
?>

      </header>

      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16593863465ebd64ee50ce15_33162966', 'notifications');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11406122505ebe5741be12f8_34972247', 'notifications');
>>>>>>> rama-assign
?>


      <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18491129225ebd64ee50da25_12054711', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14242862845ebe5741be1f14_21680248', 'breadcrumb');
>>>>>>> rama-assign
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5436249185ebd64ee50e2a9_67990128', "left_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3323049595ebe5741be27b2_64877152', "left_column");
>>>>>>> rama-assign
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11981664005ebd64ee50f6d7_60828667', "content_wrapper");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208709955ebe5741be3e23_28203607', "content_wrapper");
>>>>>>> rama-assign
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15598065865ebd64ee510980_91469169', "right_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4693002835ebe5741be5108_84897923', "right_column");
>>>>>>> rama-assign
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13381545295ebd64ee512079_47850130', "footer");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8116825355ebe5741be6873_07797722', "footer");
>>>>>>> rama-assign
?>

      </footer>

    </main>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15151478005ebd64ee512903_72293514', 'javascript_bottom');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20340031725ebe5741be7176_20654786', 'javascript_bottom');
>>>>>>> rama-assign
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18595036385ebd64ee513416_46079018', 'hook_before_body_closing_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14313438525ebe5741be7cb7_39820867', 'hook_before_body_closing_tag');
>>>>>>> rama-assign
?>

  </body>

</html>
<?php }
/* {block 'head'} */
<<<<<<< HEAD
class Block_6366509095ebd64ee50a420_79816337 extends Smarty_Internal_Block
=======
class Block_20849670115ebe5741bdc8d4_28334486 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_6366509095ebd64ee50a420_79816337',
=======
    0 => 'Block_20849670115ebe5741bdc8d4_28334486',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
<<<<<<< HEAD
class Block_851843855ebd64ee50b706_37149502 extends Smarty_Internal_Block
=======
class Block_18229568155ebe5741bdfb31_56840901 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_851843855ebd64ee50b706_37149502',
=======
    0 => 'Block_18229568155ebe5741bdfb31_56840901',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
<<<<<<< HEAD
class Block_21403380145ebd64ee50bed9_37863979 extends Smarty_Internal_Block
=======
class Block_18065346755ebe5741be0371_40331138 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'product_activation' => 
  array (
<<<<<<< HEAD
    0 => 'Block_21403380145ebd64ee50bed9_37863979',
=======
    0 => 'Block_18065346755ebe5741be0371_40331138',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
<<<<<<< HEAD
class Block_12890052365ebd64ee50c693_34603862 extends Smarty_Internal_Block
=======
class Block_15615803885ebe5741be0b50_69154861 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_12890052365ebd64ee50c693_34603862',
=======
    0 => 'Block_15615803885ebe5741be0b50_69154861',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
<<<<<<< HEAD
class Block_16593863465ebd64ee50ce15_33162966 extends Smarty_Internal_Block
=======
class Block_11406122505ebe5741be12f8_34972247 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications' => 
  array (
<<<<<<< HEAD
    0 => 'Block_16593863465ebd64ee50ce15_33162966',
=======
    0 => 'Block_11406122505ebe5741be12f8_34972247',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
<<<<<<< HEAD
class Block_18491129225ebd64ee50da25_12054711 extends Smarty_Internal_Block
=======
class Block_14242862845ebe5741be1f14_21680248 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18491129225ebd64ee50da25_12054711',
=======
    0 => 'Block_14242862845ebe5741be1f14_21680248',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
<<<<<<< HEAD
class Block_5436249185ebd64ee50e2a9_67990128 extends Smarty_Internal_Block
=======
class Block_3323049595ebe5741be27b2_64877152 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_5436249185ebd64ee50e2a9_67990128',
=======
    0 => 'Block_3323049595ebe5741be27b2_64877152',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
<<<<<<< HEAD
class Block_18864516705ebd64ee50fe21_96206988 extends Smarty_Internal_Block
=======
class Block_944669415ebe5741be45a0_26718414 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
<<<<<<< HEAD
class Block_11981664005ebd64ee50f6d7_60828667 extends Smarty_Internal_Block
=======
class Block_208709955ebe5741be3e23_28203607 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11981664005ebd64ee50f6d7_60828667',
  ),
  'content' => 
  array (
    0 => 'Block_18864516705ebd64ee50fe21_96206988',
=======
    0 => 'Block_208709955ebe5741be3e23_28203607',
  ),
  'content' => 
  array (
    0 => 'Block_944669415ebe5741be45a0_26718414',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18864516705ebd64ee50fe21_96206988', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_944669415ebe5741be45a0_26718414', "content", $this->tplIndex);
>>>>>>> rama-assign
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
<<<<<<< HEAD
class Block_15598065865ebd64ee510980_91469169 extends Smarty_Internal_Block
=======
class Block_4693002835ebe5741be5108_84897923 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_15598065865ebd64ee510980_91469169',
=======
    0 => 'Block_4693002835ebe5741be5108_84897923',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
<<<<<<< HEAD
class Block_13381545295ebd64ee512079_47850130 extends Smarty_Internal_Block
=======
class Block_8116825355ebe5741be6873_07797722 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< HEAD
    0 => 'Block_13381545295ebd64ee512079_47850130',
=======
    0 => 'Block_8116825355ebe5741be6873_07797722',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
<<<<<<< HEAD
class Block_15151478005ebd64ee512903_72293514 extends Smarty_Internal_Block
=======
class Block_20340031725ebe5741be7176_20654786 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
<<<<<<< HEAD
    0 => 'Block_15151478005ebd64ee512903_72293514',
=======
    0 => 'Block_20340031725ebe5741be7176_20654786',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
<<<<<<< HEAD
class Block_18595036385ebd64ee513416_46079018 extends Smarty_Internal_Block
=======
class Block_14313438525ebe5741be7cb7_39820867 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_18595036385ebd64ee513416_46079018',
=======
    0 => 'Block_14313438525ebe5741be7cb7_39820867',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
