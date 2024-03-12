<?php
/* Smarty version 4.3.4, created on 2024-03-11 16:05:47
  from '/app/admin253ydf1rqpcsgjjqbzf/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65ef1dcb643de9_02809160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3972b4992c2d88314988eece6b3a26781febabbd' => 
    array (
      0 => '/app/admin253ydf1rqpcsgjjqbzf/themes/default/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ef1dcb643de9_02809160 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
