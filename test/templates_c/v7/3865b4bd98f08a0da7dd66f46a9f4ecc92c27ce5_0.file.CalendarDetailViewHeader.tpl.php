<?php
/* Smarty version 4.5.4, created on 2025-02-20 20:21:23
  from '/home/dimenzij/public_html/vtiger/layouts/v7/modules/Users/CalendarDetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b78ec3d452e2_47271956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3865b4bd98f08a0da7dd66f46a9f4ecc92c27ce5' => 
    array (
      0 => '/home/dimenzij/public_html/vtiger/layouts/v7/modules/Users/CalendarDetailViewHeader.tpl',
      1 => 1727622312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b78ec3d452e2_47271956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('MODULE_NAME', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name'));?><input id="recordId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" /><div class="detailViewContainer"><div class="detailViewTitle" id="prefPageHeader"></div><div class="detailViewInfo userPreferences row-fluid"><div class="details col-xs-12"><?php }
}
