<?php
/* Smarty version 4.3.4, created on 2024-03-11 18:45:33
  from '/app/admin608hxpndbnql7mes8n8/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65ef433d7f8f07_55233986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fca1348d17d880530e5bf207fae2af87b8bb3a3' => 
    array (
      0 => '/app/admin608hxpndbnql7mes8n8/themes/default/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ef433d7f8f07_55233986 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
