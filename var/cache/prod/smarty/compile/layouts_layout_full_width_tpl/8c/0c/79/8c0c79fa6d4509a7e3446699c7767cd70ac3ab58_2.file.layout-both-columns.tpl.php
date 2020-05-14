<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 14:22:17
=======
/* Smarty version 3.1.33, created on 2020-05-14 17:24:00
>>>>>>> rama-assign
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd37f9eacf20_35092050',
=======
  'unifunc' => 'content_5ebd6290ecfd37_48160712',
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
function content_5ebd37f9eacf20_35092050 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebd6290ecfd37_48160712 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12590211315ebd37f9ea2d30_62330594', 'head');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9627691525ebd6290ec3d28_57704388', 'head');
>>>>>>> rama-assign
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6276205575ebd37f9ea4068_84146325', 'hook_after_body_opening_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4031379495ebd6290ec73f8_97181181', 'hook_after_body_opening_tag');
>>>>>>> rama-assign
?>


    <main>
      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11195460285ebd37f9ea4821_70770899', 'product_activation');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8077490815ebd6290ec7c59_96666586', 'product_activation');
>>>>>>> rama-assign
?>


      <header id="header">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10405763745ebd37f9ea5018_50709906', 'header');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9312058915ebd6290ec8454_69216193', 'header');
>>>>>>> rama-assign
?>

      </header>

      <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12133695735ebd37f9ea57a6_21470108', 'notifications');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13557926855ebd6290ec8c16_12694002', 'notifications');
>>>>>>> rama-assign
?>


      <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6952231845ebd37f9ea6384_63595222', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15641294125ebd6290ec9832_42292754', 'breadcrumb');
>>>>>>> rama-assign
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11221403275ebd37f9ea6c56_39670001', "left_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20519133265ebd6290eca0f8_07489307', "left_column");
>>>>>>> rama-assign
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2407376955ebd37f9ea8279_68255274', "content_wrapper");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16729377585ebd6290ecb689_92417900', "content_wrapper");
>>>>>>> rama-assign
?>


          <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_530657725ebd37f9ea94f3_63227546', "right_column");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3448564215ebd6290ecc9b0_06425507', "right_column");
>>>>>>> rama-assign
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer">
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_386662815ebd37f9eab084_58339086', "footer");
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7421599685ebd6290ece164_76809451', "footer");
>>>>>>> rama-assign
?>

      </footer>

    </main>

    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11312428885ebd37f9eaba00_57380479', 'javascript_bottom');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11717393725ebd6290ecea40_94088146', 'javascript_bottom');
>>>>>>> rama-assign
?>


    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9031356865ebd37f9eac761_55557208', 'hook_before_body_closing_tag');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12865903975ebd6290ecf5b7_92133055', 'hook_before_body_closing_tag');
>>>>>>> rama-assign
?>

  </body>

</html>
<?php }
/* {block 'head'} */
<<<<<<< HEAD
class Block_12590211315ebd37f9ea2d30_62330594 extends Smarty_Internal_Block
=======
class Block_9627691525ebd6290ec3d28_57704388 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'head' => 
  array (
<<<<<<< HEAD
    0 => 'Block_12590211315ebd37f9ea2d30_62330594',
=======
    0 => 'Block_9627691525ebd6290ec3d28_57704388',
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
class Block_6276205575ebd37f9ea4068_84146325 extends Smarty_Internal_Block
=======
class Block_4031379495ebd6290ec73f8_97181181 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_6276205575ebd37f9ea4068_84146325',
=======
    0 => 'Block_4031379495ebd6290ec73f8_97181181',
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
class Block_11195460285ebd37f9ea4821_70770899 extends Smarty_Internal_Block
=======
class Block_8077490815ebd6290ec7c59_96666586 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'product_activation' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11195460285ebd37f9ea4821_70770899',
=======
    0 => 'Block_8077490815ebd6290ec7c59_96666586',
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
class Block_10405763745ebd37f9ea5018_50709906 extends Smarty_Internal_Block
=======
class Block_9312058915ebd6290ec8454_69216193 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'header' => 
  array (
<<<<<<< HEAD
    0 => 'Block_10405763745ebd37f9ea5018_50709906',
=======
    0 => 'Block_9312058915ebd6290ec8454_69216193',
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
class Block_12133695735ebd37f9ea57a6_21470108 extends Smarty_Internal_Block
=======
class Block_13557926855ebd6290ec8c16_12694002 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'notifications' => 
  array (
<<<<<<< HEAD
    0 => 'Block_12133695735ebd37f9ea57a6_21470108',
=======
    0 => 'Block_13557926855ebd6290ec8c16_12694002',
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
class Block_6952231845ebd37f9ea6384_63595222 extends Smarty_Internal_Block
=======
class Block_15641294125ebd6290ec9832_42292754 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_6952231845ebd37f9ea6384_63595222',
=======
    0 => 'Block_15641294125ebd6290ec9832_42292754',
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
class Block_11221403275ebd37f9ea6c56_39670001 extends Smarty_Internal_Block
=======
class Block_20519133265ebd6290eca0f8_07489307 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'left_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11221403275ebd37f9ea6c56_39670001',
=======
    0 => 'Block_20519133265ebd6290eca0f8_07489307',
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
class Block_7166689925ebd37f9ea89c0_04094707 extends Smarty_Internal_Block
=======
class Block_16035506375ebd6290ecbe28_35942849 extends Smarty_Internal_Block
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
class Block_2407376955ebd37f9ea8279_68255274 extends Smarty_Internal_Block
=======
class Block_16729377585ebd6290ecb689_92417900 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
<<<<<<< HEAD
    0 => 'Block_2407376955ebd37f9ea8279_68255274',
  ),
  'content' => 
  array (
    0 => 'Block_7166689925ebd37f9ea89c0_04094707',
=======
    0 => 'Block_16729377585ebd6290ecb689_92417900',
  ),
  'content' => 
  array (
    0 => 'Block_16035506375ebd6290ecbe28_35942849',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7166689925ebd37f9ea89c0_04094707', "content", $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16035506375ebd6290ecbe28_35942849', "content", $this->tplIndex);
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
class Block_530657725ebd37f9ea94f3_63227546 extends Smarty_Internal_Block
=======
class Block_3448564215ebd6290ecc9b0_06425507 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'right_column' => 
  array (
<<<<<<< HEAD
    0 => 'Block_530657725ebd37f9ea94f3_63227546',
=======
    0 => 'Block_3448564215ebd6290ecc9b0_06425507',
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
class Block_386662815ebd37f9eab084_58339086 extends Smarty_Internal_Block
=======
class Block_7421599685ebd6290ece164_76809451 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'footer' => 
  array (
<<<<<<< HEAD
    0 => 'Block_386662815ebd37f9eab084_58339086',
=======
    0 => 'Block_7421599685ebd6290ece164_76809451',
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
class Block_11312428885ebd37f9eaba00_57380479 extends Smarty_Internal_Block
=======
class Block_11717393725ebd6290ecea40_94088146 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
<<<<<<< HEAD
    0 => 'Block_11312428885ebd37f9eaba00_57380479',
=======
    0 => 'Block_11717393725ebd6290ecea40_94088146',
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
class Block_9031356865ebd37f9eac761_55557208 extends Smarty_Internal_Block
=======
class Block_12865903975ebd6290ecf5b7_92133055 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
<<<<<<< HEAD
    0 => 'Block_9031356865ebd37f9eac761_55557208',
=======
    0 => 'Block_12865903975ebd6290ecf5b7_92133055',
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
