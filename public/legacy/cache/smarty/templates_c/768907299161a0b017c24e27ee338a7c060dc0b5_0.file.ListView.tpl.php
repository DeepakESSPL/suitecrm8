<?php
/* Smarty version 4.5.3, created on 2025-09-02 11:54:19
  from 'D:\laragon\www\suitecrm8\public\legacy\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_68b6daeba535c5_59212616',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '768907299161a0b017c24e27ee338a7c060dc0b5' => 
    array (
      0 => 'D:\\laragon\\www\\suitecrm8\\public\\legacy\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1756204185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68b6daeba535c5_59212616 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\laragon\\www\\suitecrm8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
