<?php
/* Smarty version 4.5.3, created on 2025-08-26 10:42:13
  from 'D:\laragon\www\suitecrm8\public\legacy\modules\Currencies\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68ad8f85b63aa4_15418858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0bc2114f28362c2a76c12205bdb2172c7e7e108' => 
    array (
      0 => 'D:\\laragon\\www\\suitecrm8\\public\\legacy\\modules\\Currencies\\EditView.tpl',
      1 => 1756204208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ad8f85b63aa4_15418858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\laragon\\www\\suitecrm8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'D:\\laragon\\www\\suitecrm8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">
js_iso4217 = <?php echo $_smarty_tpl->tpl_vars['JS_ISO4217']->value;?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Currencies/EditView.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="edit view">
<tr>
    <td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="15%" scope="row" nowrap><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LIST_NAME'];?>
: <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></td>
<td width="35%"><span><input name='name' tabindex='1' size='30' maxlength='50' type="text" value="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"></span></td>
<td width="15%" scope="row" nowrap><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LIST_ISO4217'];?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_LIST_ISO4217_HELP']),$_smarty_tpl);?>
</span></td>
<td width="35%"><span><input name='iso4217' tabindex='1' size='3'
  maxlength='3' type="text" value="<?php echo $_smarty_tpl->tpl_vars['ISO4217']->value;?>
" onKeyUp='isoUpdate(this);'></span></td>
</tr>
<tr>

</tr>
<tr>
<td width="15%" scope="row" nowrap><span> <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LIST_RATE'];?>
: <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></td>
<td width="35%"><span><input name='conversion_rate' tabindex='1' size='30' maxlength='50' type="text" value="<?php echo $_smarty_tpl->tpl_vars['CONVERSION_RATE']->value;?>
">
<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_LIST_RATE_HELP']),$_smarty_tpl);?>

</span></td>
<td width="15%" scope="row" nowrap><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LIST_SYMBOL'];?>
: <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></span></td>
<td width="35%"><span><input name='symbol' tabindex='1' size='3' maxlength='50' type="text" value="<?php echo $_smarty_tpl->tpl_vars['SYMBOL']->value;?>
"></span></td>

</tr>
<tr>

</tr>
<tr>
<td scope="row"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LIST_STATUS'];?>
:</span></td>
<td><span><select name='status' tabindex='1'><?php echo $_smarty_tpl->tpl_vars['STATUS_OPTIONS']->value;?>
</select> <em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['NTC_STATUS'];?>
</em></span></td>
</tr></table>
</td>
</tr>
</table>
<input type='hidden' name='record' value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'>
</form>
<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>

<?php }
}
