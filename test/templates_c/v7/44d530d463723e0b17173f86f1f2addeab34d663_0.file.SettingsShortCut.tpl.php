<?php
/* Smarty version 4.5.4, created on 2025-03-02 22:09:13
  from 'C:\wamp64\www\darkoCRM\vtiger\layouts\v7\modules\Settings\Vtiger\SettingsShortCut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67c4d7094f8808_53894812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44d530d463723e0b17173f86f1f2addeab34d663' => 
    array (
      0 => 'C:\\wamp64\\www\\darkoCRM\\vtiger\\layouts\\v7\\modules\\Settings\\Vtiger\\SettingsShortCut.tpl',
      1 => 1740931755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67c4d7094f8808_53894812 (Smarty_Internal_Template $_smarty_tpl) {
?><span id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
" class="col-lg-3 contentsBackground well cursorPointer moduleBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
" style="height: 100px; width: 23.5%;"><div><span><b class="themeTextColor"><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></span><span class="pull-right"><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" class="unpin close hiden"><i class="fa fa-close"></i></button></span></div><div><?php if ($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description') && $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description') != 'NULL') {
echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),$_smarty_tpl->tpl_vars['MODULE']->value);
}?></div></span>
<?php }
}
