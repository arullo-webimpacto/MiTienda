<?php
/* Smarty version 3.1.33, created on 2020-05-13 20:50:02
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebc415af083e1_64971270',
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
function content_5ebc415af083e1_64971270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5133349605ebc415aefca16_96319120', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13901845335ebc415aeffd85_31909810', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17321491015ebc415af005d2_93565692', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12171926975ebc415af00d97_37244144', 'header');
?>

      </header>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7480673655ebc415af015a8_56934634', 'notifications');
?>


      <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17739998675ebc415af02197_88562683', 'breadcrumb');
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19721739155ebc415af02a38_95032917', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15708177795ebc415af03f25_07474633', "content_wrapper");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6748824335ebc415af05210_54612182', "right_column");
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19497874695ebc415af06931_20754106', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5699539585ebc415af071a2_87493930', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16410834175ebc415af07cb0_49407593', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_5133349605ebc415aefca16_96319120 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_5133349605ebc415aefca16_96319120',
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
class Block_13901845335ebc415aeffd85_31909810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_13901845335ebc415aeffd85_31909810',
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
class Block_17321491015ebc415af005d2_93565692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_17321491015ebc415af005d2_93565692',
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
class Block_12171926975ebc415af00d97_37244144 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12171926975ebc415af00d97_37244144',
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
class Block_7480673655ebc415af015a8_56934634 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_7480673655ebc415af015a8_56934634',
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
class Block_17739998675ebc415af02197_88562683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_17739998675ebc415af02197_88562683',
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
class Block_19721739155ebc415af02a38_95032917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_19721739155ebc415af02a38_95032917',
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
class Block_18337891855ebc415af04672_34788153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_15708177795ebc415af03f25_07474633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_15708177795ebc415af03f25_07474633',
  ),
  'content' => 
  array (
    0 => 'Block_18337891855ebc415af04672_34788153',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18337891855ebc415af04672_34788153', "content", $this->tplIndex);
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_6748824335ebc415af05210_54612182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_6748824335ebc415af05210_54612182',
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
class Block_19497874695ebc415af06931_20754106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19497874695ebc415af06931_20754106',
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
class Block_5699539585ebc415af071a2_87493930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_5699539585ebc415af071a2_87493930',
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
class Block_16410834175ebc415af07cb0_49407593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_16410834175ebc415af07cb0_49407593',
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
