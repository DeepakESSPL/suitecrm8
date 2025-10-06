<?php
/* Smarty version 4.5.3, created on 2025-09-02 11:54:19
  from 'D:\laragon\www\suitecrm8\public\legacy\modules\SavedSearch\SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b6daeb8644a0_40583707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fb34844c122d2b21ef0e3efbe23b0746fb533ab' => 
    array (
      0 => 'D:\\laragon\\www\\suitecrm8\\public\\legacy\\modules\\SavedSearch\\SavedSearchSelects.tpl',
      1 => 1756204217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b6daeb8644a0_40583707 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>

	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
	
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
