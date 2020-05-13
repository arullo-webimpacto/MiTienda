<?php
/* Smarty version 3.1.33, created on 2020-05-13 16:09:07
  from 'C:\xampp\htdocs\mitienda\modules\miprimermodulo\views\templates\hook\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ebbff83ae9347_84170838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '572cd0a7cc7e281f6ef65ed83064e8153ce2bee0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mitienda\\modules\\miprimermodulo\\views\\templates\\hook\\home.tpl',
      1 => 1589378915,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebbff83ae9347_84170838 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="colores">
	<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['texto_variable']->value, ENT_QUOTES, 'UTF-8');?>
</h1>
	<h1 >hola <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
</div>

<?php }
}
