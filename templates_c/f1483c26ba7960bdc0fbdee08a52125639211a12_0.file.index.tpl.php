<?php
/* Smarty version 4.3.1, created on 2023-05-19 09:56:36
  from 'E:\Xampp\htdocs\smartyTest\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64672bb4642567_90650507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1483c26ba7960bdc0fbdee08a52125639211a12' => 
    array (
      0 => 'E:\\Xampp\\htdocs\\smartyTest\\index.tpl',
      1 => 1684482992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64672bb4642567_90650507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'E:\\Xampp\\htdocs\\smartyTest\\smarty\\libs\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'E:\\Xampp\\htdocs\\smartyTest\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'E:\\Xampp\\htdocs\\smartyTest\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
Answer of 1.
<?php echo smarty_function_html_options(array('name'=>'foo','options'=>$_smarty_tpl->tpl_vars['myOption']->value,'selected'=>$_smarty_tpl->tpl_vars['myOption']->value),$_smarty_tpl);?>

<br>

Answer of 2.
<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['str']->value, ENT_QUOTES, 'UTF-8', true);?>

<br>

Answer of 4.
<?php echo ($_smarty_tpl->tpl_vars['str2']->value).(" Concatenation");?>

<br>

Answer of 8.
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['our_culture']->value, 'ar');
$_smarty_tpl->tpl_vars['ar']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ar']->value) {
$_smarty_tpl->tpl_vars['ar']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ar']->value, 'a');
$_smarty_tpl->tpl_vars['a']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->do_else = false;
?>
<ul><li><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</li></ul>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<br>

Answer of 5.
<?php echo smarty_function_counter(array('name'=>'val','start'=>1),$_smarty_tpl);?>

<?php echo smarty_function_cycle(array('name'=>'name','values'=>4),$_smarty_tpl);?>









<?php }
}
