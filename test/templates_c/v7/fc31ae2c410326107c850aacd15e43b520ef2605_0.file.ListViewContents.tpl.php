<?php
/* Smarty version 4.5.4, created on 2025-02-20 20:21:55
  from '/home/dimenzij/public_html/vtiger/layouts/v7/modules/Settings/Tags/ListViewContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67b78ee37f7d69_50137408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc31ae2c410326107c850aacd15e43b520ef2605' => 
    array (
      0 => '/home/dimenzij/public_html/vtiger/layouts/v7/modules/Settings/Tags/ListViewContents.tpl',
      1 => 1727622312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b78ee37f7d69_50137408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ListViewContents.tpl",'Settings:Vtiger' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><div id="editTagContainer" class="hide modal-dialog modelContainer"><input type="hidden" name="id" value="" /><?php ob_start();
echo vtranslate('LBL_EDIT_TAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('HEADER_TITLE', $_prefixVariable1);
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0, true);
?><div class="modal-content"><div class="editTagContents col-lg-12 modal-body"><div class='col-lg-4'></div><div class='col-lg-8'><input type="text" name="tagName" class='inputElement' value=""/><div class="checkbox"><label><input type="hidden" name="visibility" value="<?php echo Vtiger_Tag_Model::PRIVATE_TYPE;?>
"/><input type="checkbox" name="visibility" value="<?php echo Vtiger_Tag_Model::PUBLIC_TYPE;?>
" style="vertical-align: text-top;"/>&nbsp; <?php echo vtranslate('LBL_SHARE_TAGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></div></div><div class="modal-footer col-lg-12"><center><button <?php if ($_smarty_tpl->tpl_vars['BUTTON_ID']->value != null) {?> id="<?php echo $_smarty_tpl->tpl_vars['BUTTON_ID']->value;?>
" <?php }?> class="btn btn-success saveTag" type="submit" name="saveButton"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><a href="#" class="cancelLink cancelSaveTag" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></center></div></div></div><?php }
}
