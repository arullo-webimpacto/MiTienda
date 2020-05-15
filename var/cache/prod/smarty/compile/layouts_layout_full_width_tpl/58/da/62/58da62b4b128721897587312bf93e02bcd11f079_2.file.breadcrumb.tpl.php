<?php
<<<<<<< HEAD
/* Smarty version 3.1.33, created on 2020-05-14 17:34:06
=======
/* Smarty version 3.1.33, created on 2020-05-15 10:48:02
>>>>>>> rama-assign
  from 'C:\xampp\htdocs\mitienda\themes\classic\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
<<<<<<< HEAD
  'unifunc' => 'content_5ebd64eed456d2_42381120',
=======
  'unifunc' => 'content_5ebe5742488bc4_49986131',
>>>>>>> rama-assign
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58da62b4b128721897587312bf93e02bcd11f079' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\themes\\classic\\templates\\_partials\\breadcrumb.tpl',
      1 => 1589282750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_5ebd64eed456d2_42381120 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_5ebe5742488bc4_49986131 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> rama-assign
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1553475335ebd64eed43600_32255009', 'breadcrumb');
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21422065115ebe5742484a94_36133052', 'breadcrumb');
>>>>>>> rama-assign
?>

  </ol>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
<<<<<<< HEAD
class Block_7098432855ebd64eed441b2_73750746 extends Smarty_Internal_Block
=======
class Block_4874777995ebe5742485627_56624421 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
              <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            </a>
            <meta itemprop="position" content="<?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
">
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
<<<<<<< HEAD
class Block_1553475335ebd64eed43600_32255009 extends Smarty_Internal_Block
=======
class Block_21422065115ebe5742484a94_36133052 extends Smarty_Internal_Block
>>>>>>> rama-assign
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
<<<<<<< HEAD
    0 => 'Block_1553475335ebd64eed43600_32255009',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_7098432855ebd64eed441b2_73750746',
=======
    0 => 'Block_21422065115ebe5742484a94_36133052',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_4874777995ebe5742485627_56624421',
>>>>>>> rama-assign
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
?>
        <?php 
<<<<<<< HEAD
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7098432855ebd64eed441b2_73750746', 'breadcrumb_item', $this->tplIndex);
=======
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4874777995ebe5742485627_56624421', 'breadcrumb_item', $this->tplIndex);
>>>>>>> rama-assign
?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
