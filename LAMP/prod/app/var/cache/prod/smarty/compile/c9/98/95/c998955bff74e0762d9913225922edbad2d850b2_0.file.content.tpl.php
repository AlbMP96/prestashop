<?php
/* Smarty version 4.3.4, created on 2024-03-11 17:35:04
  from '/app/admin245svj2mo0qorfqbdyk/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65ef32b8e08056_89771538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c998955bff74e0762d9913225922edbad2d850b2' => 
    array (
      0 => '/app/admin245svj2mo0qorfqbdyk/themes/default/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ef32b8e08056_89771538 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
