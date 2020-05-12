<?php
/* Smarty version 3.1.33, created on 2020-05-12 14:58:53
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eba9d8d6de960_18934278',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00e0b51563a5335ced3263a57830b6a960675708' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\page.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eba9d8d6de960_18934278 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21341585735eba9d8d6daa72_74175392', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15609802785eba9d8d6db148_64377657 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_2215139135eba9d8d6dad96_78365028 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15609802785eba9d8d6db148_64377657', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_14188835315eba9d8d6dd457_23700361 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_11217767505eba9d8d6dd877_76396226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8985930355eba9d8d6dd154_22429364 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14188835315eba9d8d6dd457_23700361', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11217767505eba9d8d6dd877_76396226', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3972430075eba9d8d6de1a2_66186323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_13163185995eba9d8d6ddee7_18410573 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3972430075eba9d8d6de1a2_66186323', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_21341585735eba9d8d6daa72_74175392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_21341585735eba9d8d6daa72_74175392',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_2215139135eba9d8d6dad96_78365028',
  ),
  'page_title' => 
  array (
    0 => 'Block_15609802785eba9d8d6db148_64377657',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8985930355eba9d8d6dd154_22429364',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_14188835315eba9d8d6dd457_23700361',
  ),
  'page_content' => 
  array (
    0 => 'Block_11217767505eba9d8d6dd877_76396226',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_13163185995eba9d8d6ddee7_18410573',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3972430075eba9d8d6de1a2_66186323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2215139135eba9d8d6dad96_78365028', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8985930355eba9d8d6dd154_22429364', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13163185995eba9d8d6ddee7_18410573', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
