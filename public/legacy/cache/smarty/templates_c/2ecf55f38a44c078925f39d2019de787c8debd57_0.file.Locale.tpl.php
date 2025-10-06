<?php
/* Smarty version 4.5.3, created on 2025-08-26 10:44:14
  from 'D:\laragon\www\suitecrm8\public\legacy\modules\Administration\Locale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68ad8ffe387a36_64056405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ecf55f38a44c078925f39d2019de787c8debd57' => 
    array (
      0 => 'D:\\laragon\\www\\suitecrm8\\public\\legacy\\modules\\Administration\\Locale.tpl',
      1 => 1756204209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ad8ffe387a36_64056405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\laragon\\www\\suitecrm8\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


<?php echo '<script'; ?>
 type="text/javascript">
	var ERR_NO_SINGLE_QUOTE = '<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_NO_SINGLE_QUOTE'];?>
';
	var cannotEq = "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP'];?>
";

	function verify_data(formName) {
		var f = document.getElementById(formName);

		for(i=0; i<f.elements.length; i++) {
			if(f.elements[i].value == "'") {
				alert(ERR_NO_SINGLE_QUOTE + " " + f.elements[i].name);
				return false;
			}
		}
		// currency syntax
		if (document.ConfigureSettings.default_number_grouping_seperator.value == document.ConfigureSettings.default_decimal_seperator.value) {
			alert(cannotEq);
			return false;
		}
		return true;
	}
<?php echo '</script'; ?>
>

<BR>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
	action="index.php?module=Administration&action=Locale&process=true">

<span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value['main'];?>
</span>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
<tr>
	<td>
	<div class="action-button">
		<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
"
			accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
"
			class="button primary"
			type="submit"
			name="save"
			onclick="return verify_data('ConfigureSettings');"
			value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " >
		&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " > 
		</div>
		</td>
	</tr>
</table>


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
		<th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_SYSTEM_SETTINGS'];?>
</h4></th>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_DATE_FORMAT'];?>
: </td>
		<td>
			<?php echo smarty_function_html_options(array('name'=>'default_date_format','selected'=>$_smarty_tpl->tpl_vars['config']->value['default_date_format'],'options'=>$_smarty_tpl->tpl_vars['config']->value['date_formats']),$_smarty_tpl);?>

		</td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_TIME_FORMAT'];?>
: </td>
		<td>
			<?php echo smarty_function_html_options(array('name'=>'default_time_format','selected'=>$_smarty_tpl->tpl_vars['config']->value['default_time_format'],'options'=>$_smarty_tpl->tpl_vars['config']->value['time_formats']),$_smarty_tpl);?>

		</td>
	</tr>
	<tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_LANGUAGE'];?>
: </td>
		<td>
			<?php echo smarty_function_html_options(array('name'=>'default_language','selected'=>$_smarty_tpl->tpl_vars['config']->value['default_language'],'options'=>$_smarty_tpl->tpl_vars['LANGUAGES']->value),$_smarty_tpl);?>

		</td>
	</tr>
	</tr>
	<tr>
		<td  scope="row" valign="top"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_NAME_FORMAT'];?>
: </td>
		<td>
            <?php echo smarty_function_html_options(array('name'=>'default_locale_name_format','id'=>"default_locale_name_format",'selected'=>$_smarty_tpl->tpl_vars['config']->value['default_locale_name_format'],'options'=>$_smarty_tpl->tpl_vars['NAMEFORMATS']->value),$_smarty_tpl);?>

		</td>
        <?php if ((isset($_smarty_tpl->tpl_vars['upgradeInvalidLocaleNameFormat']->value))) {?>
        <td>
            <?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_INVALID_LOCALE_NAME_FORMAT_UPGRADE'];?>

        </td>
        <?php }?>
	</tr>
	</table>


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
		<th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_CURRENCY'];?>
</h4></th>
	</tr><tr>
		<td scope="row" width="200"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_CURRENCY_NAME'];?>
: </td>
		<td>
			<input type='text' size='25' name='default_currency_name' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['default_currency_name'];?>
' >
		</td>
		<td scope="row" width="200"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_CURRENCY_SYMBOL'];?>
: </td>
		<td>
			<input type='text' size='4' name='default_currency_symbol'  value='<?php echo $_smarty_tpl->tpl_vars['config']->value['default_currency_symbol'];?>
' >
		</td>
	</tr><tr>
		<td scope="row" width="200"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_CURRENCY_ISO4217'];?>
: </td>
		<td>
			<input type='text' size='4' name='default_currency_iso4217' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['default_currency_iso4217'];?>
'>
		</td>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_NUMBER_GROUPING_SEP'];?>
: </td>
		<td>
			<input type='text' size='3' maxlength='1' name='default_number_grouping_seperator' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['default_number_grouping_seperator'];?>
'>
		</td>
	</tr><tr>
		<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_DECIMAL_SEP'];?>
: </td>
		<td>
			<input type='text' size='3' maxlength='1' name='default_decimal_seperator'  value='<?php echo $_smarty_tpl->tpl_vars['config']->value['default_decimal_seperator'];?>
'>
		</td>
		<td scope="row"></td>
		<td></td>
	</tr>
</table>


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr><th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['EXPORT'];?>
</h4></th>
	</tr><tr>
		<td nowrap width="10%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['EXPORT_DELIMITER'];?>
: </td>
		<td width="25%" >
			<input type='text' name='export_delimiter' size="5" value='<?php echo $_smarty_tpl->tpl_vars['config']->value['export_delimiter'];?>
'>
		</td>
		<td nowrap width="10%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['EXPORT_CHARSET'];?>
: </td>
		<td width="25%" >
			<select name="default_export_charset"><?php echo $_smarty_tpl->tpl_vars['exportCharsets']->value;?>
</select>
		</td>
		</tr><tr>
		<td nowrap width="10%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['DISABLE_EXPORT'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['disable_export'])) {?>
			<?php $_smarty_tpl->_assignInScope('disable_export_checked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('disable_export_checked', '');?>
		<?php }?>
		<td width="25%" ><input type='hidden' name='disable_export' value='false'><input name='disable_export'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['disable_export_checked']->value;?>
></td>
		<td nowrap width="10%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['ADMIN_EXPORT_ONLY'];?>
: </td>
		<?php if (!empty($_smarty_tpl->tpl_vars['config']->value['admin_export_only'])) {?>
			<?php $_smarty_tpl->_assignInScope('admin_export_only_checked', 'CHECKED');?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('admin_export_only_checked', '');?>
		<?php }?>
		<td width="20%" ><input type='hidden' name='admin_export_only' value='false'><input name='admin_export_only'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['admin_export_only_checked']->value;?>
></td>
	</tr>
</table>


<?php if (!empty($_smarty_tpl->tpl_vars['collationOptions']->value)) {?>
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
		<th align="left" scope="row" colspan="2">
			<h4>
				<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DB_COLLATION_TITLE'];?>

			</h4>
		</th>
	</tr>
	<tr>
		<td scope="row" width="200">
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DB_COLLATION'];?>

		</td>
		<td scope="row">
			<select name="collation" id="collation"><?php echo $_smarty_tpl->tpl_vars['collationOptions']->value;?>
</select>
		</td>
		<td></td>
		<td></td>
	</tr>
</table>


<?php }?>
<div class="hide-btn">
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" class="button primary"  type="submit" name="save" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " />
		&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
  " />
</div>
<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>

</form>
<?php echo '<script'; ?>
 language="Javascript" type="text/javascript">
<?php echo $_smarty_tpl->tpl_vars['getNameJs']->value;?>

<?php echo '</script'; ?>
>
<?php }
}
