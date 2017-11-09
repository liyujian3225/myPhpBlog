<?php
/* Smarty version 3.1.30, created on 2017-07-18 09:55:44
  from "C:\wamp\www\PHP\MVC\template\admin\editLists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596dbf005d3164_35686590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79001f557f87fa0140d00db5ca353b5c4194819a' => 
    array (
      0 => 'C:\\wamp\\www\\PHP\\MVC\\template\\admin\\editLists.html',
      1 => 1500363323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596dbf005d3164_35686590 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="index.php?d=admin&f=lists&m=editStatus" method="post">
        <input type="hidden" name="sid" value="<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
">
        <input type="hidden" name="mid" value="<?php echo $_smarty_tpl->tpl_vars['mid']->value;?>
">
        未审核：<input type="radio" name="status" value="0" <?php if ($_smarty_tpl->tpl_vars['status']->value == 0) {?> checked <?php }?> ><br>
        审核中：<input type="radio" name="status" value="1" <?php if ($_smarty_tpl->tpl_vars['status']->value == 1) {?> checked <?php }?>><br>
        通过：  <input type="radio" name="status" value="2" <?php if ($_smarty_tpl->tpl_vars['status']->value == 2) {?> checked <?php }?>><br>
          精华：<input type="radio" name="status" value="3" <?php if ($_smarty_tpl->tpl_vars['status']->value == 3) {?> checked <?php }?>><br>
          违规：<input type="radio" name="status" value="4" <?php if ($_smarty_tpl->tpl_vars['status']->value == 4) {?> checked <?php }?>><br>
        <input type="submit" value="提交">
    </form>
</body>
</html><?php }
}
