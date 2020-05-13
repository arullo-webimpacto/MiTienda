<?php
/* Smarty version 3.1.33, created on 2020-05-13 20:50:03
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebc415b0fa475_23686771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '956003a58727896d6bd21e29ddf5698bb67bfbb4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\_partials\\head.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5ebc415b0fa475_23686771 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12480885025ebc415b0f1009_02535328', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17128017615ebc415b0f1652_00171340', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12623443885ebc415b0f1b23_39375444', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15131511645ebc415b0f69c9_78265672', 'head_viewport');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6844224085ebc415b0f6e93_91378960', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8746713645ebc415b0f81b2_75354850', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9811861025ebc415b0f8cb6_64991906', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2468781165ebc415b0f98a7_92102614', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9443882805ebc415b0fa093_49971791', 'hook_extra');
?>

<?php }
/* {block 'head_charset'} */
class Block_12480885025ebc415b0f1009_02535328 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_12480885025ebc415b0f1009_02535328',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_17128017615ebc415b0f1652_00171340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_17128017615ebc415b0f1652_00171340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_10617324645ebc415b0f1dd3_91459996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_17586439555ebc415b0f2757_05162983 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_13038693645ebc415b0f2fb2_27967351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_18984911015ebc415b0f5495_18578352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
?>
            <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_seo'} */
class Block_12623443885ebc415b0f1b23_39375444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_12623443885ebc415b0f1b23_39375444',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_10617324645ebc415b0f1dd3_91459996',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_17586439555ebc415b0f2757_05162983',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_13038693645ebc415b0f2fb2_27967351',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_18984911015ebc415b0f5495_18578352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10617324645ebc415b0f1dd3_91459996', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17586439555ebc415b0f2757_05162983', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13038693645ebc415b0f2fb2_27967351', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18984911015ebc415b0f5495_18578352', 'head_hreflang', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_15131511645ebc415b0f69c9_78265672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_15131511645ebc415b0f69c9_78265672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_6844224085ebc415b0f6e93_91378960 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_6844224085ebc415b0f6e93_91378960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_8746713645ebc415b0f81b2_75354850 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_8746713645ebc415b0f81b2_75354850',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_9811861025ebc415b0f8cb6_64991906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_9811861025ebc415b0f8cb6_64991906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_2468781165ebc415b0f98a7_92102614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_2468781165ebc415b0f98a7_92102614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_9443882805ebc415b0fa093_49971791 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_9443882805ebc415b0fa093_49971791',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
