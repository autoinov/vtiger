<?php
/* Smarty version 4.5.4, created on 2025-02-20 20:04:56
  from '/home/dimenzij/public_html/vtiger/layouts/v7/modules/Users/PreferenceDetailViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b78ae8107a30_62995056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cf43f0094499808ffeb36b219560fcec1a8f5fc' => 
    array (
      0 => '/home/dimenzij/public_html/vtiger/layouts/v7/modules/Users/PreferenceDetailViewPreProcess.tpl',
      1 => 1727622312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b78ae8107a30_62995056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "SettingsMenuStart.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div class="bodyContents"><div class=""><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "PreferenceDetailViewHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
