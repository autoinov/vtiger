<?php
/* Smarty version 4.5.4, created on 2025-02-20 20:04:56
  from '/home/dimenzij/public_html/vtiger/layouts/v7/modules/Users/DetailViewFullContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b78ae814fd36_01331601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12a3c5337c55538d98871aae458c3c975abad394' => 
    array (
      0 => '/home/dimenzij/public_html/vtiger/layouts/v7/modules/Users/DetailViewFullContents.tpl',
      1 => 1727622312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b78ae814fd36_01331601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('NAME_FIELDS', array('first_name','last_name'));
if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value) {
$_smarty_tpl->_assignInScope('NAME_FIELDS', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields());
}?><form id="detailView" data-name-fields='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['NAME_FIELDS']->value);?>
' method="POST"><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?></form>
<?php }
}
