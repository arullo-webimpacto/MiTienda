<?php
/* Smarty version 3.1.33, created on 2020-05-12 14:57:49
  from 'C:\xampp\htdocs\mitienda\admin006nxtose\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eba9d4d3afe01_67443163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3932c2c4e4be463833466ba30750ab4e53c471d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\admin006nxtose\\themes\\default\\template\\content.tpl',
      1 => 1589282752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eba9d4d3afe01_67443163 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
